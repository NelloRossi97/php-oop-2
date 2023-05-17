<?php
include __DIR__ . '/Products.php';
class Categories extends Products {
    protected $category;

    public function __construct($name, $description, $price, $image, $pieces, $category) {
        parent::__construct($name, $description, $price, $image, $pieces);
        $this->category = $category;
    }

    public function getCategory() {
        return $this->category;
    }
}