<?php

$comp = 'FL1'; //competition code in api

function apiRequestByComp($comp)
{
    $uri = 'http://api.football-data.org/v2/competitions/'.$comp.'/matches?status=SCHEDULED';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 69d559cf22ed4ee4a8a94dc353db2b1c';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $matches = json_decode($response);

    return  $matches;
}

function apiRequestByMatch($idMatch)
{
    $uri = 'http://api.football-data.org/v2/matches/'.$idMatch;
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 69d559cf22ed4ee4a8a94dc353db2b1c';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $match = json_decode($response);

    return  $match;
}
