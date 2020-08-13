<?php

namespace TravelSorter\Classes;

class Plane extends Vehicle
{
    public function direction()
    {
        $direction = '';
        $direction .= 'From ';
        $direction .= $this->Departure;
        $direction .= ', take flight ';
        $direction .= $this->TransportationNumber;
        $direction .= ' to ';
        $direction .= $this->Arrival;
        $direction .= '. Gate ';
        $direction .= $this->Gate;
        $direction .= ', seat ';
        $direction .= $this->Seat;
        $direction .= '. ';
        $direction .= isset($this->Baggage) ? 'Baggage drop at ticket counter '.$this->Baggage 
                                            : 'Baggage will be automatically transferred from your last leg';
        return $direction;
    }
}
