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
    <link href="https://fonts.googleapis.com/css?family=Amaranth|Titillium+Web" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="index.html" class="title-nav">Pea</a>
            <ul>
                <li><a href="<?=URL?>controllers/pages/createLeague.php"> Créer ma ligue</a></li>
                <li><a href=""> Mes ligues</a></li>
                <li><a href=""> Mes pronos</a></li>
                <li><a href=""><img src="<?=URL?>assets/images/icon-1.png" alt=""  class="info"></a></li>
                <li><a href="<?=URL?>deconnexion"><img src="<?=URL?>assets/images/icon-2.png" alt=""></a></li>
            </ul>
        </nav>
    </header>