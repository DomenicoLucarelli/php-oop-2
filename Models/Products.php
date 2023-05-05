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

    // funzione che mi restituisce il nome della classe dell'oggetto 
    public function getClassName($object){
        return get_class($object);
    }

    
   

}