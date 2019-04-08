<?php

define ('URL','http://localhost:8888/public/');

$q = !empty($_GET['q']) ? $_GET['q'] : 'home';

$controller = '404';

if($q == 'home')
{
    $controller = 'home';
}

else if (preg_match('/^delete\/[1-9][0-9]*$/', $q))
{
    $controller = 'delete';
}

// else if ($q == 'about-us')
// {
//     $controller = 'about';
// }
