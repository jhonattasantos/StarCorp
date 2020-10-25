<?php

namespace StarCorp;

use PHPUnit\Framework\TestCase;
use StarCorp\CalculateMultiplesThree;

class CalculateMultiplesThreeTest extends TestCase
{
    /** @test */
    public function must_return_five_StarCorp() 
    {
        $calc = new CalculateMultiplesThree("StarCorp",range(1,16));  

        $found = array_filter($calc->handler(), function($item){
            return $item == "StarCorp";
        });
        
        $this->assertEquals(5, count($found));     
    }

    /** @test */
    public function must_return_zero_StarCorp() 
    {
        $calc = new CalculateMultiplesThree("StarCorp",range(1,2));  

        $found = array_filter($calc->handler(), function($item){
            return $item == "StarCorp";
        });
        
        $this->assertEquals(0, count($found));     
    }
}
