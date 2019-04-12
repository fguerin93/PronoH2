<?php 

    function updateScore($score,$idUsers, $idLeague)
    {
        global $pdo;

        $query = $pdo->exec('UPDATE league_users SET score = '.$score.' WHERE id_users = '.$idUsers.' AND id_league = '.$idLeague);
    }