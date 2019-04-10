<?php

$title = 'Home2';

// get league info from db

include '../database/database.php';

$reqleague = $pdo->query('SELECT name FROM leagues WHERE id_creator = '.$_SESSION['id']);
$leagues = $reqleague->fetchAll();

include '../views/pages/home2.php';