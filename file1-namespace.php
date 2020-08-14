<?php

namespace Building;

class House{
    public int $rooms;
    public String $color;
    public boolean $hasGarage;

    public function __construct($rooms, $color, $hasGarage)
    {
        $this->rooms = $rooms;
        $this->color = $color;
        $this->hasGarage = $hasGarage;
    }
    
    public function getRooms()
    {
        return $this->rooms;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getHasGarage()
    {
        return $this->hasGarage;
    }

    public function throwException() {
        throw new \Exception(); 
    }
}




?>