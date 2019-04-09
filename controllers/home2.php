<?php

$title = 'Home2';

// get league info from db

include '../database/database.php';

$reqleague = $pdo->query("SELECT name FROM league WHERE id<=2");
$leagues = $reqleague->fetchAll();

for($i = 0; $i < 2; $i++)
{
echo '<pre>';
print_r($leagues[$i]->name);
echo '</pre>';
}

include '../views/pages/home2.php';