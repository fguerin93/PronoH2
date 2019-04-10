<?php 

$title = 'Créer une ligue';

$idCreator = $_SESSION['id'];

if(isset($_POST['formcreationleague'])) {
    $name = htmlspecialchars($_POST['name']);
    $code = htmlspecialchars($_POST['code']);
    $text = htmlspecialchars($_POST['text']);
    if(!empty($name) AND !empty($code) AND !empty($text)) {
        $namelength = strlen($name);
        if($namelength <= 15)
        {
            $reqname = $pdo->prepare("SELECT * FROM league WHERE name = ?");
            $reqname->execute(array($name));
            $nameExist = $reqname->rowCount();
            if ($nameExist == 0)
            {
                $insertmbr = $pdo->prepare("INSERT INTO leagues(name, id_creator, code, message) VALUES(?, ?, ?, ?)");
                $insertmbr->execute(array($name, $idCreator, $code, $text));

                $idleaguequery = $pdo->query('SELECT id FROM leagues ORDER BY id DESC LIMIT 1');
                $id_league = $idleaguequery->fetch();
                $id_league = $id_league->id;

                $insertmbr2 = $pdo->prepare("INSERT INTO league_users(id_league, id_users) VALUES(?, ?)");
                $insertmbr2->execute(array($id_league,$idCreator));

                $erreur = "Votre ligue a bien été créée";
                header('location: matchs');
            } else {
                $erreur = "Le nom de la ligue existe déjà";
                echo "<script>alert(\"Le nom de la ligue existe déjà \")</script>";
            }
        } else {
            $erreur = "Le nom de ligue est trop long";
            echo "<script>alert(\"Le nom de ligue est trop long \")</script>";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
        echo "<script>alert(\"Tous les champs doivent être complétés \")</script>";
    }
}


include '../views/pages/createLeague.php';