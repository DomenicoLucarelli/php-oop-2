<?php

require_once  __DIR__ . '/../Traits/Materials.php';

class Kennel extends Product{

    use Material;

    public $size;
    // public $material;

    

    function __construct(string $name, float $price, Species $species, string $image,string $size,string $type ){

        parent::__construct($name,$price,$species,$image);

        $this->size = $size;
        // $this->material = $material;
        $this->type = $type;
        
        

    }

}