<?php

namespace StarCorp;

use PHPUnit\Framework\TestCase;
use StarCorp\CalculateMultiplesFive;

class CalculateMultiplesFiveTest extends TestCase
{
    /** @test */
    public function must_return_three_IT() 
    {
        $calc = new CalculateMultiplesFive("IT",[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]);  

        $found = array_filter($calc->handler(), function($item){
            return $item == "IT";
        });
        
        $this->assertEquals(3, count($found));     
    }
}
