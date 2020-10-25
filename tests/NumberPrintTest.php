<?php

namespace StarCorp;

use PHPUnit\Framework\TestCase;
use StarCorp\NumberPrint;

class NumberPrintTest extends TestCase
{
    /** @test */
    public function must_return_seven_strings() 
    {
        $numbers = range(1,16);
        $numberPrint = new NumberPrint($numbers);

        $found = array_filter($numberPrint->display(), function($item){
            return gettype($item) != "integer";
        });

        $this->assertEquals(7, count($found));     
    }
}
