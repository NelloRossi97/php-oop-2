<?php
include __DIR__ . '/Categories.php';
include __DIR__ . '/WeightTrait.php';
class Type extends Categories
{
    use WeightTrait;
    protected $type;
    public function __construct($name, $description, $price, $image, $pieces, $category, $type)
    {
        parent::__construct($name, $description, $price, $image, $pieces, $category);
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}