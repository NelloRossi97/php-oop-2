<?php
include __DIR__ . '/Categories.php';
include __DIR__ . '/Type.php';
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
    
}