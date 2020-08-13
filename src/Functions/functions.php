<?php

function sortBordings($boardingCollection)
{
    $departures = array_column($boardingCollection, 'Departure');

    foreach ($boardingCollection as $board) {
        if (!in_array($board['Arrival'],$departures)) {
            $destination = $board;
        }
    }
    
    $sorted[] = $destination;
    while (count($sorted) < count($boardingCollection)) {
        $key = array_search(end($sorted)['Departure'], array_column($boardingCollection, 'Arrival'));
        $sorted[] = $boardingCollection[$key];
    }
    
    $sorted = array_reverse($sorted);

    return $sorted;
}

function giveDirections($boardingCollection)
{
    $direction = [];
    
    foreach ($boardingCollection as $board) {
        $vehicle = 'TravelSorter\\Classes\\'.$board['Transportation'];
        $vehicle = new $vehicle($board);
        $direction[] = $vehicle->direction();
    }

    return $direction;
}
