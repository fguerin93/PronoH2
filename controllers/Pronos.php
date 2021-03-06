<?php

    $title = 'Pronos';

    include '../controllers/requestApi.php';
    include '../controllers/getScore.php';
    include '../controllers/updateScore.php';

    //explode url to get league
    $qExplode = explode("/",$q);
    $idLeague = strval($qExplode[1]);

    //req for matches infos
    $reqmatches = $pdo->query('SELECT * FROM matches WHERE id_matches IN (SELECT id_match FROM league_matches WHERE id_league = '.$idLeague.')');
    $matches = $reqmatches->fetchAll();

    //req for idleagues
    $reqidmatches = $pdo->query('SELECT id FROM league_matches WHERE id_league ='.$idLeague);
    $idLeaguesMatches = $reqidmatches->fetchAll();

    //req for code
    $reqcode = $pdo->query('SELECT code FROM leagues WHERE id = '.$idLeague);
    $code = $reqcode->fetchAll();

    //form for bets
    $reqpronos = $pdo->query('SELECT score_home, score_away FROM bets WHERE id_league = '.$idLeague.' AND id_users = '.$_SESSION['id']);
    $pronos = $reqpronos->fetchAll();


    //form for bets
    if(isset($_POST['formbets']))
    {
        $homeGoalsArray = $_POST['home_goals'];
        $awayGoalsArray = $_POST['away_goals'];

        $verifyVar = 0;

        for ($i = 0; $i < sizeof($homeGoalsArray); $i++)
        {  
            if ((!empty($homeGoalsArray[$i])) AND (!empty($awayGoalsArray[$i])))
            {
                $verifyVar = $verifyVar + 1;
            }
            else if (($homeGoalsArray[$i]=='0') || ($awayGoalsArray[$i]=='0'))
            {
                $verifyVar = $verifyVar + 1;
            }
        }

        if (sizeof($homeGoalsArray)==$verifyVar)
        {
            $idUsers = htmlspecialchars($_SESSION['id']);

            for ($i = 0; $i < sizeof($homeGoalsArray); $i++)
            {
                $reqidleaguematches = $pdo->prepare("SELECT * FROM bets WHERE id_leagues_matches = ? AND id_users = ?");
                $reqidleaguematches->execute(array($idLeaguesMatches[$i]->id,$_SESSION['id']));
                $idLeagueMatchesExist = $reqidleaguematches->rowCount();
                if($idLeagueMatchesExist == 0)
                {
                    $insertmbr = $pdo->prepare("INSERT INTO bets(id_users, id_league, id_leagues_matches, score_home, score_away) VALUES(?, ?, ?, ?, ?)");
                    $insertmbr->execute(array($idUsers, $idLeague, $idLeaguesMatches[$i]->id, $homeGoalsArray[$i], $awayGoalsArray[$i]));
                    header('location: ../pronos/'.$idLeague);
                }
                else {
                    $updatembr = $pdo->exec('UPDATE bets SET score_home = '.$homeGoalsArray[$i].', score_away = '.$awayGoalsArray[$i].' WHERE id_leagues_matches='.$idLeaguesMatches[$i]->id.' AND id_users ='.$_SESSION['id']);
                    header('location: ../pronos/'.$idLeague);
                }
            }

        } else {
            $erreur = "Tous les champs doivent être complétés !";
        }

    }

    //Test place in ranking of user login
    $userLogScore = getScoreUser($idLeague, $_SESSION['id']);
    $userScores = getScoreOtherUsers($idLeague);

    //prepare score to display

    $homeGoalResult = [];
    $awayGoalResult = [];

    $score = $userLogScore[0]->score;
    foreach ($matches as $i => $match)
    {
        $homeGoalResult[$i] = 0;
        $awayGoalResult[$i] = 0;
        if ($matches[$i]->status == 'FINISHED')
        {
            $results = apiRequestByMatch($matches[$i]->id_matches);
            $homeGoalResult[$i] = $results->match->score->fullTime->homeTeam;
            $awayGoalResult[$i] = $results->match->score->fullTime->awayTeam;

            if (($homeGoalResult[$i]==$pronos[$i]->score_home) && ($awayGoalResult[$i]==$pronos[$i]->score_away))
            {
                $score = $userLogScore[0]->score + 5;
            }
        }
    }

    //update score
    updateScore($score, $_SESSION['id'], $idLeague);

    //Test place in ranking of user login
    $userLogScore = getScoreUser($idLeague, $_SESSION['id']);
    $userScores = getScoreOtherUsers($idLeague);

    $place = 1;

    foreach ($userScores as $i => $value)
    {
        if ($userLogScore[0]->score==$userScores[$i]->score)
        {
            $place=$i+1;
        }
    }
    

    include '../views/pages/pronos.php';