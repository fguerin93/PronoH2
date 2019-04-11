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
    <link rel="stylesheet" href="<?=URL?>assets/css/mesPronos.css">
    <link href="https://fonts.googleapis.com/css?family=Amaranth|Titillium+Web" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="logo-nav">
                <a href="<?=URL?>home"><img src="<?=URL?>assets/images/logo.svg" alt="logo" class="logo"></a>
            </div>
            <ul>
                <li><a href="<?=URL?>myleagues"> Mes ligues</a></li>
                <li class="information"><img src="<?=URL?>assets/images/icon-1.png" alt=""  class="info"></li>
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
    <div class="container-informations">
        <div class="header">
            <h2>Comment jouer</h2>
            <img src="<?=URL?>assets/images/cross.svg" alt="" class="cross">
        </div>
        <div class="content">
            <p>RIP les vieux fichiers Excel, Pronos Entre Amis est une interface gratuite qui te permet de pronostiquer entre amis/collègues sur les matchs des 5 plus grands championnats Européen.Comment ça marche ? </p>
            <p>Après être passé par la case inscription, crée ta propre ligue et invite tous tes potes à l’aide d’un lien ou d’un QR Code qui te sera fourni. Une fois que tes potes t’auront rejoint tu pourras choisir des matchs sur lesquels pronostiquer. Tu pourras modifier ton choix jusqu’à 1 minute avant le coup d’envoi.</p>
            <p>Simple non ?</p>
            <p>Enfin, tu pourras découvrir tes points obtenus après chaque rencontre et donc ton classement parmi tes amis/collègues. Un petit exemple : tu pronostiques une victoire 3-0 du PSG contre L’OM ; si tu te trompes et que c’est l’OM qui gagne (même si c’est très peu probable) alors tu as 0 point ; si c’est le PSG qui gagne mais que tu n’as pas le bon score alors tu gagnes X points ; si c’est le PSG qui gagne et que tu as le bon score, alors tu gagnes le double, soit X points. Voilà, c’est tout, tu peux maintenant commencer à pronostiquer avec tes amis</p>
        </div>
    </div>