<?php

namespace TravelSorter\Classes;

class Train extends Vehicle
{
    public function direction()
    {
        $direction = '';
        $direction .= 'Take train ';
        $direction .= $this->TransportationNumber;
        $direction .= ' from ';
        $direction .= $this->Departure;
        $direction .= ' to ';
        $direction .= $this->Arrival;
        $direction .= '. ';
        $direction .= isset($this->Seat) ? 'Seat number: '.$this->Seat : 'No seat assignment';
        return $direction;
    }
}
