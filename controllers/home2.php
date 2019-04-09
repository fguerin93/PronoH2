<?php

$title = 'Home2';

// get league info from db

include '../database/database.php';

var_dump($_SESSION);
$reqleague = $pdo->query('SELECT name FROM league WHERE id_creator<='.$_SESSION['id']);
$leagues = $reqleague->fetchAll();

for($i = 0; $i < 2; $i++)
{
    echo '<pre>';
    print_r($leagues[$i]->name);
    echo '</pre>';
}

include '../views/pages/home2.php';