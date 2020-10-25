<?php

namespace StarCorp;

use PHPUnit\Framework\TestCase;
use StarCorp\CalculateMultiplesThreeAndFive;

class CalculateMultiplesThreeAndFiveTest extends TestCase
{
    /** @test */
    public function must_return_one_StarCorpianos() 
    {
        $numbers = range(1,16);
        $calc = new CalculateMultiplesThreeAndFive("StarCorpianos", $numbers);  

        $found = array_filter($calc->handler(), function($item){
            return $item == "StarCorpianos";
        });
        
        $this->assertEquals(1, count($found));     
    }

    /** @test */
    public function must_return_zero_StarCorpianos() 
    {
        $numbers = range(1,2);
        $calc = new CalculateMultiplesThreeAndFive("StarCorpianos", $numbers);  

        $found = array_filter($calc->handler(), function($item){
            return $item == "StarCorpianos";
        });
        
        $this->assertEquals(0, count($found));     
    }
}
