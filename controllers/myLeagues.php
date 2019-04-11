<?php 

    $title = 'my league';

    $reqleague = $pdo->query('SELECT name, id FROM leagues WHERE id IN (SELECT id_league FROM league_users WHERE id_users ='.$_SESSION['id'].')');
    $leagues = $reqleague->fetchAll();


    include '../controllers/connexion.php';
    include '../views/pages/myLeagues.php';