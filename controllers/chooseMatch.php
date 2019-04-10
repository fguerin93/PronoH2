<?php

include '../controllers/requestApi.php';

$comp = 'PL';
$matches = apiRequest($comp);

if (isset($_POST['comp']))
{
    $chooseComp = $_POST['comp'];
    $comp = $chooseComp;
    $matches = apiRequest($comp);
}



include '../views/pages/chooseMatch.php';

?>