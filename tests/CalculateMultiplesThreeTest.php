<?php

namespace StarCorp;

use PHPUnit\Framework\TestCase;
use StarCorp\CalculateMultiplesThree;

class CalculateMultiplesThreeTest extends TestCase
{
    /** @test */
    public function must_return_five_StarCorp() 
    {
        $calc = new CalculateMultiplesThree("StarCorp",[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]);  

        $found = array_filter($calc->handler(), function($item){
            return $item == "StarCorp";
        });
        
        $this->assertEquals(5, count($found));     
    }
}
