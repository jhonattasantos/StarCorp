<?php

namespace StarCorp;

class NumberPrint
{

    private $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function display()
    {
        $multplesThreeAndFive = new CalculateMultiplesThreeAndFive("StarCorpianos", $this->numbers);
        $multiplesFive        = new CalculateMultiplesFive("IT",$multplesThreeAndFive->handler());
        $multiplesThree       = new CalculateMultiplesThree("StarCorp", $multiplesFive->handler());
        return $multiplesThree->handler();
    }
    
}