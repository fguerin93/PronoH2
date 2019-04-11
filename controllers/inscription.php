<?php

if(isset($_POST['forminscription']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $password = sha1($_POST['password']);
    $password2 = sha1($_POST['password2']);
    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['password2'])) {
    $pseudolength = strlen($pseudo);
        if($pseudolength <= 255)
        {
            $reqpseudo = $pdo->prepare("SELECT * FROM users WHERE pseudo = ?"); //change 
            $reqpseudo->execute(array($pseudo)); //change
            $pseudoExist = $reqpseudo->rowCount();
            if ($pseudoExist == 0)
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {
                    $reqmail = $pdo->prepare("SELECT * FROM users WHERE mail = ?");
                    $reqmail->execute(array($mail));
                    $mailExist = $reqmail->rowCount();
                    if($mailExist == 0)
                    {
                        if($password == $password2)
                        {
                            $insertmbr = $pdo->prepare("INSERT INTO users(pseudo, mail, password) VALUES(?, ?, ?)");
                            $insertmbr->execute(array($pseudo, $mail, $password));
                            $erreur = "Votre compte a bien été créé !";
                            $requser = $pdo->query("SELECT id, pseudo, mail FROM users ORDER BY id DESC LIMIT 1");
                            $userinfo = $requser->fetchAll();
                            $_SESSION['id'] = $userinfo[0]->id;
                            $_SESSION['pseudo'] = $userinfo[0]->pseudo;
                            $_SESSION['mail'] = $userinfo[0]->mail;
                            header('location: home');
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
                $erreur = "Le pseudo est déjà utilisé !";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

include '../views/pages/inscription.php';