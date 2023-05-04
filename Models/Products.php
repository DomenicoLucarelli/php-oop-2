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

        $this->setSpeciesImage();
    }

    // funzione che mi restituisce il nome della classe dell'oggetto 
    public function getClassName($object){
        return get_class($object);
    }

    // funzione che mi setta l'immagine dell'animale corrispondente alla stringa assegnata
    public function setSpeciesImage(){
        if($this->species == 'Dog'){
            $this->species = '<i class="fa-solid fa-dog"></i>';
        }else{
            $this->species = '<i class="fa-solid fa-cat"></i>';
        }
    }

}