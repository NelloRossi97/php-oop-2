<?php

class Products {
    public $name;
    public $description;
    public $price;
    public $image;
    public $pieces;
    public function __construct(string $name, string $description, int $price, string $image, int $pieces){
        $this->name=$name;
        $this->description=$description;
        $this->price=$price;
        $this->image=$image;
        $this->pieces=$pieces;
    }

    public function getName() {
        return $this->name;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getImage() {
        return $this->image;
    }
    public function getPieces() {
        return $this->pieces;
    }
    
}
