<?php

namespace TravelSorter\Classes;

abstract class Vehicle implements VehicleInterface
{
    public function __construct(array $boardings)
    {
        foreach ($boardings as $key => $value) {
                $this->$key = $value;
        }
    }
}