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
            <a href="<?=URL?>" class="title-nav">Pea</a>
            <ul>
                <li><a href="<?=URL?>league"> Créer ma ligue</a></li>
                <li><a href=""> Mes ligues</a></li>
                <li><a href=""> Mes pronos</a></li>
                <li><a href=""><img src="<?=URL?>assets/images/icon-1.png" alt=""  class="info"></a></li>
                <li><img src="<?=URL?>assets/images/icon-2.png" alt="" class="icon-connexion"></li>
            </ul>
        </nav>
    </header>
    <div class="container-login">
        <div class="login">
            <form method="POST" action="">
             <div>
                    <label for="login">Pseudo</label><br>
                 <input type="text" name="" placeholder="Sam" />
             </div>
             <div>
                 <label for="password">Mot de passe</label><br>
                 <input type="password" name="" placeholder="2UB763" />
             </div> 
             <button type="submit">Connexion</button>
          </form>
     </div>
    </div>
    
