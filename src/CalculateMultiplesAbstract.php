<?php

namespace StarCorp;

abstract class CalculateMultiplesAbstract
{
    protected $nickname;
    protected $numbers;
    protected $filter;

    public function __construct(string $nickname, array $numbers)
    {
        $this->nickname = $nickname;  
        $this->numbers = $numbers;      
    }

    final public function apply()
    {
        $map = array_map(function($index){
            return [$index => $this->nickname];
        }, array_keys($this->filter));
        return array_replace($this->numbers, ...array_values($map));
    }

    final public function nonZero($element)
    {
        $element = (int) $element;
        return $element !== 0;
    }

    abstract public function handler();

}