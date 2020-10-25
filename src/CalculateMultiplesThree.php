<?php

namespace StarCorp;

final class CalculateMultiplesThree extends CalculateMultiplesAbstract
{
    public function __construct(string $nickname, array $numbers)
    {
        parent::__construct($nickname, $numbers);
    }
    
    public function handler()
    {
        $this->filter = array_filter($this->numbers,function($n){
            return $this->nonZero($n) && ($n % 3) === 0;
        });
        
        return $this->apply();
    }

}