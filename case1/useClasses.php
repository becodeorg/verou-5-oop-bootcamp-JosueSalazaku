<?php

require 'index.php';

class item {

    public string $name;
    public int $pieces;
    public float $price;
    public string $type;

    public function __construct(string $name, int $pieces, float $price, string $type) {
        $this->name = $name;
        $this->pieces = $pieces;
        $this->price = $price;
        $this->type = $type;
    }
}



echo " <br>Hello world <br>";

