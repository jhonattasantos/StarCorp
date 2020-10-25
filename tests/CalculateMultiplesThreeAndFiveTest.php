<?php

namespace StarCorp;

use PHPUnit\Framework\TestCase;
use StarCorp\CalculateMultiplesThreeAndFive;

class CalculateMultiplesThreeAndFiveTest extends TestCase
{
    /** @test */
    public function must_return_one_StarCorpianos() 
    {
        $numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
        $calc = new CalculateMultiplesThreeAndFive("StarCorpianos", $numbers);  

        $found = array_filter($calc->handler(), function($item){
            return $item == "StarCorpianos";
        });
        
        $this->assertEquals(1, count($found));     
    }
}
