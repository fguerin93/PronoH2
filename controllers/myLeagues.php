<?php 

    $title = 'my league';


    $reqleague = $pdo->query('SELECT name FROM leagues WHERE id_creator = '.$_SESSION['id']);
    $leagues = $reqleague->fetchAll();

    include '../controllers/connexion.php';
    include '../views/pages/myLeagues.php';