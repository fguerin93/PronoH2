<?php 


    function getNumberInLeague($idleague) 
    {
        global $pdo;

        $query = $pdo->query('SELECT * FROM league_users WHERE id_league = '.$idleague);
        $users = $query->fetchAll();

        return sizeof($users);
    }

    function getScoreUser($idLeague, $idUsers)
    {
        global $pdo;

        $query = $pdo->query('SELECT score FROM league_users WHERE id_league = '.$idLeague.' AND id_users = '.$idUsers);
        $users = $query->fetchAll();

        return $users;
    }

    function getScoreOtherUsers($idLeague)
    {
        global $pdo;

        $query = $pdo->query('SELECT score FROM league_users WHERE id_league = '.$idLeague.' ORDER BY score DESC');
        $users = $query->fetchAll();

        return $users;
    }