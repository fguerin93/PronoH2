<?php

$title = 'Home';

session_start();
var_dump($_SESSION);

include '../views/pages/home.php';