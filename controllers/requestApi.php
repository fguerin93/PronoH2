<?php

$uri = 'http://api.football-data.org/v2/competitions/FL1/matches?status=SCHEDULED';
$reqPrefs['http']['method'] = 'GET';
$reqPrefs['http']['header'] = 'X-Auth-Token: 69d559cf22ed4ee4a8a94dc353db2b1c';
$stream_context = stream_context_create($reqPrefs);
$response = file_get_contents($uri, false, $stream_context);
$matches = json_decode($response);

for ($i = 0; $i < sizeof($matches->matches); $i++)
{
    echo $matches->matches[$i]->homeTeam->name;
    echo ' vs ';
    echo $matches->matches[$i]->awayTeam->name;
    echo ' date  ';
    $date = substr($matches->matches[$i]->utcDate, 0, -4);
    echo str_replace('T', ' ', $date);
    echo '<pre>';
}

// echo '<pre>';
// print_r($matches->matches);
// echo '</pre>';