<?php

include '../database/database.php';
include '../controllers/requestApi.php';

$comp = 'PL';
$matches = apiRequestByComp($comp);

// change matchs when select other leagues
if (isset($_POST['comp']))
{
    $chooseComp = $_POST['comp'];
    $comp = $chooseComp;
    $matches = apiRequestByComp($comp);
}

// select and choose match
if(isset($_POST['formaddmatch']))
{
    $idMatchesArray = explode(",", $_POST['idString']);
    $matchesArray = array(); 
    foreach ($idMatchesArray as $idMatches)
    {
        $match = apiRequestByMatch($idMatches);
        array_push($matchesArray,$match);
    }

    foreach ($matchesArray as $i => $matches)
    {
        $id_matches = $matchesArray[$i]->match->id;
        $home_team = $matchesArray[$i]->match->homeTeam->name;
        $away_team = $matchesArray[$i]->match->awayTeam->name;
        $date = $matchesArray[$i]->match->utcDate;

        $insertmatches = $pdo->prepare('INSERT INTO matches(id_matches, home_team, away_team, date) VALUES (:id_matches, :home_team, :away_team, :date)');

        $insertmatches->bindValue('id_matches', $id_matches);
        $insertmatches->bindValue('home_team', $home_team);
        $insertmatches->bindValue('away_team', $away_team);
        $insertmatches->bindValue('date', $date);
        $insertmatches->execute();

        //request for max id league
        $idleaguequery = $pdo->query('SELECT id FROM leagues ORDER BY id DESC LIMIT 1');
        $id_league = $idleaguequery->fetch();
        $id_league = $id_league->id;

        $insertleaguematches = $pdo->prepare('INSERT INTO league_matches(id_league, id_match) VALUES (:id_league, :id_match)');

        $insertleaguematches->bindValue('id_league', $id_league);
        $insertleaguematches->bindValue('id_match', $id_matches);
        $insertleaguematches->execute();
    }
    header('location: home');

}



include '../views/pages/chooseMatch.php';

?>