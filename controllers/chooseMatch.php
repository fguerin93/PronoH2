<?php

include '../controllers/requestApi.php';

$comp = 'PL';

if (isset($_POST['comp']))
{
    $chooseComp = $_POST['comp'];
    $comp = $chooseComp;
    $matches = apiRequest($comp);

    for ($i = 0; $i < 20; $i++)
    {
        echo $matches->matches[$i]->homeTeam->name;
        echo ' vs ';
        echo $matches->matches[$i]->awayTeam->name;
        echo ' date  ';
        $date = substr($matches->matches[$i]->utcDate, 0, -4);
        echo str_replace('T', ' ', $date);
        echo '<pre>';
    }

}




include '../views/pages/chooseMatch.php';

?>