<?php
trait WeightTrait
{
    public $weight;
    public function getWeight($weight)
    {
        $this->weight = $weight;
    }
    public function setWeight($weight)
    {
        if (!is_int($weight)) {
            throw new Exception('Peso non specificato');
        }
        return $weight;
    }
}