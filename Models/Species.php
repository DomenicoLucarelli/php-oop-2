<?php

class Species{
    public $name;
    public $image;

    function __construct(string $name, string $image)
    {
        $this->name = $name;
        $this->image = $image;

    }
}