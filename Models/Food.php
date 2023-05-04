<?php

class Food extends Product{

    public $Ingredients;
    public $weight;
    

    function __construct(string $name, float $price, string $species, string $image,array $Ingredients, int $weight){

        parent::__construct($name,$price,$species,$image);

        $this->Ingredients = $Ingredients;
        $this->weight = $weight;

    }

}