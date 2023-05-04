<?php

class Product{

    public $name;
    public $price;
    public $species;
    public $image;

    function __construct(string $name, float $price, string $species, string $image){

        $this->name = $name;
        $this->price = $price;
        $this->species = $species;
        $this->image = $image;
    }

}