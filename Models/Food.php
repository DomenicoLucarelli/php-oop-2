<?php

class Food extends Product{

    public $Ingredients;
    public $weight;
    

    function __construct(string $name, float $price, Species $species, string $image,array $Ingredients, int $weight){

        parent::__construct($name,$price,$species,$image);

        $this->Ingredients = $Ingredients;
        $this->weight = $weight;

    }

    public function getStringOfArray($array){
         return implode(" - ", $array);
    }

}