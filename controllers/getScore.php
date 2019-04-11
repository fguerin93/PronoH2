<?php 


    function getNumberInLeague($idleague) 
    {
        global $pdo;

        $query = $pdo->query('SELECT * FROM league_users WHERE id_league = '.$idleague);
        $users = $query->fetchAll();

        return sizeof($users);
    }