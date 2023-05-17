<?php 
class Categories extends Products{
    public $title;
    public function __construct(string $title,){
        $this->title = $title;
    }
}