<?php

class Toy extends Product{

    public $material;

    function __construct(string $name, float $price, Species $species, string $image,string $material){

        parent::__construct($name,$price,$species,$image);

        $this->material = $material;
    }

}