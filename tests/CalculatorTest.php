<?php

namespace Abaeza\MyFirstLibrarie\Tests;

use Abaeza\MyFirstLibrarie\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    /**
     * @test
     */
    public function itSums()
    {
        $sum = (new Calculator())->sum(2, 2);
        $this->assertSame(4, $sum);
    }
}