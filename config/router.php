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

<<<<<<< HEAD
else if ($q == 'league')
{
    $controller = 'createLeague';
=======
else if ($q == 'connexion')
{
    $controller = 'connexion';
>>>>>>> b16bb09a0b44aaec1a0f920603a4c1791aef393a
}


// else if (preg_match('/^delete\/[1-9][0-9]*$/', $q))
// {
//     $controller = 'delete';
// }

// else if ($q == 'about-us')
// {
//     $controller = 'about';
// }
