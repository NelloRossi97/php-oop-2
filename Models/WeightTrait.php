<?php
trait WeightTrait
{
    public $weight;
    public function setWeight($weight, $unit)
    {
        $this->weight = $weight . ' ' . $unit;
    }
}