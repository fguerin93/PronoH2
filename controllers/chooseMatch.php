<?php

include '../controllers/requestApi.php';

$comp = 'PL';
$matches = apiRequest($comp);

// change matchs when select other leagues
if (isset($_POST['comp']))
{
    $chooseComp = $_POST['comp'];
    $comp = $chooseComp;
    $matches = apiRequest($comp);
}

// select and choose match




include '../views/pages/chooseMatch.php';

?>