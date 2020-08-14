<?php

interface Buildable {
    public function getDimensions(); 
    public function getBlueprint();
}

class Apartment implements Buildable{
    public $size;
    protected $blueprints;

    public function __construct($size, $blueprints) {
        $this->size = $size;
        $this->blueprints = $blueprints; 
    }
    public function getDimensions(){
        return $this->size;
    }

    public function getBlueprint(){
        return $this->blueprints;
    }
}

?>