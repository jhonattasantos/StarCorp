<?php

namespace StarCorp;

use PHPUnit\Framework\TestCase;
use StarCorp\CalculateMultiplesFive;

class CalculateMultiplesFiveTest extends TestCase
{
    /** @test */
    public function must_return_three_IT() 
    {
        $calc = new CalculateMultiplesFive("IT",range(1,16));  

        $found = array_filter($calc->handler(), function($item){
            return $item == "IT";
        });
        
        $this->assertEquals(3, count($found));     
    }
}
