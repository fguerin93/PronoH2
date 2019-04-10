<?php

define ('URL','http://localhost:8888/public/');

$q = !empty($_GET['q']) ? $_GET['q'] : 'home';

$controller = '404';

session_start();

if($q == 'home')
{
    if (empty($_SESSION))
    {
        $controller = 'home';
    } else {
        $controller = 'home2';
    }
}

else if ($q == 'inscription')
{
    $controller = 'inscription';
}

else if ($q == 'league')
{
    $controller = 'createLeague';
}

else if ($q == 'matchs')
{
    $controller = 'chooseMatch';
}

else if ($q == 'connexion')
{
    $controller = 'connexion';
}

else if ($q == 'deconnexion')
{
    $controller = 'deconnexion';
}

else if ($q == 'league')
{
    $controller = 'createLeague';
}

else if ($q == 'pronos')
{
    $controller = 'Pronos';
}

else if ($q == 'league')
{
    $controller = 'myLeagues';
}

// else if (preg_match('/^delete\/[1-9][0-9]*$/', $q))
// {
//     $controller = 'delete';
// }

// else if ($q == 'about-us')
// {
//     $controller = 'about';
// }
