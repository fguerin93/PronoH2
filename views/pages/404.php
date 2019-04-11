<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=URL?>assets/css/style.css">
    <title><?= !empty($title) ? $title : '' ?></title>
</head>
<body>

    <div class="container-404">
        <img src="<?=URL?>assets/images/404.svg" alt="erreur 404">
    </div>
    <div class="container-404-message">
        <p>Oops la page que vous recherchez semble introuvable</p>
    </div>
    <script src="<?=URL?>assets/js/404.js"></script>
</body>
</html>
