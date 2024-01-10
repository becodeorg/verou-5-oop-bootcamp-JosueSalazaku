<?php

require 'index.php';

class Item {

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

class Basket {
    public array $items = [];

    public function addItem(Item $item) 
    {
        $this->item[] = $item;
    }
}


echo " <br>Hello world <br>";

