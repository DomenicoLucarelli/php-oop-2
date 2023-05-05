<?php
require_once  __DIR__ . '/../Traits/Materials.php';

class Toy extends Product{

    use Material;

    public $material;

    function __construct(string $name, float $price, Species $species, string $image,string $type){

        parent::__construct($name,$price,$species,$image);

        $this->type = $type;

    }

}