<?php 


if(isset($_POST['formconnexion'])) {
    $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
    $passwordconnect = sha1($_POST['passwordconnect']);
    if(!empty($pseudoconnect) AND !empty($passwordconnect)) {
        $requser = $pdo->prepare("SELECT * FROM users WHERE pseudo = ? AND password = ?");
        $requser->execute(array($pseudoconnect, $passwordconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo->id;
            $_SESSION['pseudo'] = $userinfo->pseudo;
            $_SESSION['mail'] = $userinfo->mail;
            header('location: home');
        } else {
            $erreur = "Mauvais pseudo ou mot de passe !";
            echo "<script>alert(\"Mauvais pseudo ou mot de passe ! \")</script>";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
        echo "<script>alert(\"Tous les champs doivent être complétés ! \")</script>";
    }
}

include '../controllers/verifyConnexion.php';