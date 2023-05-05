<?php
require_once __DIR__ .'/Species.php';
class Product{

    public $name;
    public $price;
    public $species;
    public $image;

    function __construct(string $name, float $price, Species $species, string $image){

        $this->name = $name;
        $this->price = $price;
        $this->species = $species;
        $this->image = $image;

        
    }
    public function checkPrice(){

        if($this->price <= 0){

            throw new Exception('Il prezzo deve essere maggiore di 0');
        }else{
            return $this->price;
        }
    }
}