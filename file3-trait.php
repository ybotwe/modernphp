<?php


trait FullyFurnished {
    
    public function hasFurniture(){
        return 'Building has furniture';
    }

    public function hasAppliances(){
        return 'Building has appliances';
    }
}

class Bungalow{
    use FullyFurnished;

    public function hasFurniture(){
        return 'Bungalow has furniture';
    }
}

$b = new Bungalow();
echo $b->hasFurniture() . "\n";
echo $b->hasAppliances();

?>