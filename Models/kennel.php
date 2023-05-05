<?php

class Kennel extends Product{

    public $size;
    public $material;
    

    function __construct(string $name, float $price, Species $species, string $image,string $size, string $material){

        parent::__construct($name,$price,$species,$image);

        $this->size = $size;
        $this->material = $material;
        

    }

}