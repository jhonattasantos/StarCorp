<?php

namespace StarCorp;

use PHPUnit\Framework\TestCase;
use StarCorp\NumberPrint;

class NumberPrintTest extends TestCase
{
    /** @test */
    public function must_return_seven_strings() 
    {
        $numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
        $numberPrint = new NumberPrint($numbers);

        $found = array_filter($numberPrint->display(), function($item){
            return gettype($item) != "integer";
        });

        $this->assertEquals(7, count($found));     
    }
}
