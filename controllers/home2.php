<?php

$title = 'Home';

$idUsers = $_SESSION['id'];

if(isset($_POST['formjoinleague']))
{
    $code = htmlspecialchars($_POST['code']);
    if(!empty($_POST['code']))
    {
        $reqcode = $pdo->prepare("SELECT * FROM leagues WHERE code = ?");
        $reqcode->execute(array($code));
        $codeexist = $reqcode->rowCount();
        if($codeexist == 1)
        { 
            $leagueinfo = $reqcode->fetch();
            $id_league = $leagueinfo->id;
            var_dump($id_league);

            $insertmbr2 = $pdo->prepare("INSERT INTO league_users(id_league, id_users) VALUES(?, ?)");
            $insertmbr2->execute(array($id_league,$idUsers));

            header('location: myleagues');

        } else {
            $erreur = "La ligue recherchée n'existe pas";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

include '../views/pages/home2.php';