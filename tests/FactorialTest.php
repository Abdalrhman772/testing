<?php

use PHPUnit\Framework\TestCase;

require './src/Factorial.php';

class FactorialTest extends TestCase
{
    public function testCalcFactorial()
    {
        $fact = new Factorial;
        $res = $fact->CalcFactorial(4);
        $this->assertEquals(24, $res);
    }
}
