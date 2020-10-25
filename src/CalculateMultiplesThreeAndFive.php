<?php

namespace StarCorp;

final class CalculateMultiplesThreeAndFive extends CalculateMultiplesAbstract
{
    public function __construct(string $nickname, array $numbers)
    {
        parent::__construct($nickname, $numbers);
    }

    public function handler()
    {
        $this->filter = array_filter($this->numbers,function($n){
            return $this->nonZero($n) && (($n % 3) === 0 && ($n % 5) === 0);
        });
        
        return $this->apply();
    }

}