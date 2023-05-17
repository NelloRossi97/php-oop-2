<?php 
class Type extends Products{
    public $type;
    public function __construct(string $type,){
        $this->type = $type;
    }
}