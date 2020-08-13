<?php

namespace TravelSorter\Classes;

class Bus extends Vehicle
{
    public function direction()
    {
        $direction = '';
        $direction .= 'Take the airport bus from ';
        $direction .= $this->Departure;
        $direction .= ' to ';
        $direction .= $this->Arrival;
        $direction .= '. ';
        $direction .= isset($this->Seat) ? 'Seat number: '.$this->Seat : 'No seat assignment';
        return $direction;
    }
}