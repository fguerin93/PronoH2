<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= !empty($title)? $title: ''?></title>
    <link rel="stylesheet" href="<?=URL?>assets/css/style.css">
    <link rel="stylesheet" href="<?=URL?>assets/css/reset.css">
    <link rel="stylesheet" href="<?=URL?>assets/css/league.css">
    <link rel="stylesheet" href="<?=URL?>assets/css/myLeagues.css">
    <link rel="stylesheet" href="<?=URL?>assets/css/inscription.css">
    <link rel="stylesheet" href="<?=URL?>assets/css/chooseMatch.css">
    <link rel="stylesheet" href="<?=URL?>css/mesPronos.css">
    <link href="https://fonts.googleapis.com/css?family=Amaranth|Titillium+Web" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="logo-nav">
                <a href="<?=URL?>home"><img src="<?=URL?>assets/images/logo.svg" alt="logo" class="logo"></a>
            </div>
            <ul>
                <li><a href="<?=URL?>myLeagues"> Mes ligues</a></li>
                <li><a href=""><img src="<?=URL?>assets/images/icon-1.png" alt=""  class="info"></a></li>
                <li><img src="<?=URL?>assets/images/icon-2.png" alt="" class="icon-connexion"></li>
            </ul>
        </nav>
    </header>
    <div class="container-connexion">
        <div class="login">
            <form method="POST" action="">
                <div>
                    <label for="login">Pseudo</label><br>
                    <input type="text" name="pseudoconnect" placeholder="pseudo" />
                </div>
                <div>
                    <label for="password">Mot de passe</label><br>
                    <input type="password" name="passwordconnect" placeholder="Mot de passe" />
                </div>
                <button type="submit" name="formconnexion">Connexion</button>
            </form>
        </div>
    </div>
    <div class="container-deconnexion">
        <div class="login">
                <div>
                    <p class="title">Pseudo</p>
                    <p><?= $_SESSION['pseudo'] ?></p>
                </div>
                <div>
                    <p class="title">Email</p>
                    <p><?= $_SESSION['mail'] ?></p>
                </div>
                <a href="<?= URL ?>deconnexion"><button class="button-deconnected">Deconnexion</button></a>
        </div>
    </div>
