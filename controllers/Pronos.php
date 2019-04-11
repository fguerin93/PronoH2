<?php

    $title = 'Pronos';

    include '../controllers/requestApi.php';

    // $zer = apiRequestByMatch(239280);
    // echo '<pre>';
    // print_r($zer);
    // echo '</pre>';

    //req for variables to put in views
    $qExplode = explode("/",$q);
    $idLeague = strval($qExplode[1]);

    $reqmatches = $pdo->query('SELECT * FROM matches WHERE id_matches IN (SELECT id_match FROM league_matches WHERE id_league = '.$idLeague.')');
    $matches = $reqmatches->fetchAll();

    $reqidmatches = $pdo->query('SELECT id FROM league_matches WHERE id_league ='.$idLeague);
    $idLeaguesMatches = $reqidmatches->fetchAll();

    $reqcode = $pdo->query('SELECT code FROM leagues WHERE id = '.$idLeague);
    $code = $reqcode->fetchAll();

    //form for bets
    $reqpronos = $pdo->query('SELECT score_home, score_away FROM bets WHERE id_league = '.$idLeague.' AND id_users = '.$_SESSION['id']);
    $pronos = $reqpronos->fetchAll();

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

    //prepare score to display

    $homeGoalResult = [];
    $awayGoalResult = [];
    foreach ($matches as $i => $match)
    {
        $homeGoalResult[$i] = 0;
        $awayGoalResult[$i] = 0;
        if ($matches[$i]->status == 'FINISHED')
        {
            $results = apiRequestByMatch($matches[$i]->id_matches);
            $homeGoalResult[$i] = $results->match->score->fullTime->homeTeam;
            $homeGoalResult[$i] = $results->match->score->fullTime->homeTeam;
        }
    }

    include '../views/pages/Pronos.php';