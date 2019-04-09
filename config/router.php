<?php

define ('URL','http://localhost:8888/public/');

$q = !empty($_GET['q']) ? $_GET['q'] : 'home';

$controller = '404';

if($q == 'home')
{
    $controller = 'home';
}

else if ($q == 'inscription')
{
    $controller = 'inscription';
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

// else if (preg_match('/^delete\/[1-9][0-9]*$/', $q))
// {
//     $controller = 'delete';
// }

// else if ($q == 'about-us')
// {
//     $controller = 'about';
// }
