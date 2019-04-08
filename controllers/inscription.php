<?php

include '../database/database.php';

if(isset($_POST['forminscription'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $mail2 = htmlspecialchars($_POST['mail2']);
        $password = sha1($_POST['password']);
        $password2 = sha1($_POST['password2']);
        if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['password']) AND !empty($_POST['password2'])) {
           $pseudolength = strlen($pseudo);
           if($pseudolength <= 255) {
              if($mail == $mail2) {
                 if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $pdo->prepare("SELECT * FROM users WHERE mail = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0) {
                       if($password == $password2) {
                          $insertmbr = $pdo->prepare("INSERT INTO users(pseudo, mail, password) VALUES(?, ?, ?)");
                          $insertmbr->execute(array($pseudo, $mail, $password));
                          $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                       } else {
                          $erreur = "Vos mots de passes ne correspondent pas !";
                       }
                    } else {
                       $erreur = "Adresse mail déjà utilisée !";
                    }
                 } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                 }
              } else {
                 $erreur = "Vos adresses mail ne correspondent pas !";
              }
           } else {
              $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
           }
        } else {
           $erreur = "Tous les champs doivent être complétés !";
        }
     }

     include '../views/pages/inscription.php';