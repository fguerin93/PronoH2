<?php

    $title = 'Pronos';

    $qExplode = explode("/",$q);
    $idLeague = strval($qExplode[1]);
    var_dump($idLeague);

    $reqmatches = $pdo->query('SELECT * FROM matches WHERE id_matches IN (SELECT id_match FROM league_matches WHERE id_league = '.$idLeague.')');
    $matches = $reqmatches->fetchAll();

    echo '<pre>';
    print_r($matches);
    echo '</pre>';

    include '../views/pages/Pronos.php';