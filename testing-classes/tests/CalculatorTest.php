<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

    public function testInstance() {
        new Calculator;
    }

    public function testResultDefaultsToZero() {
        $calculator = new Calculator;

        $this->assertSame(0, $calculator->getResult());
    }

    public function testAddsNumbers() {
        $calculator = new Calculator;

        $calculator->add(5);

        $this->assertSame(5, $calculator->getResult());
    }
    
    /**
     *  @expectedException InvalidArgumentException
     */
    public function testRequiresNumericValue() {
        $calculator = new Calculator;

        $calculator->add('This must throw an exception');
    }

    public function testAcceptsMultipleArgs() {
        $calculator = new Calculator;

        $calculator->add(1, 2, 3, 4, 5);

        $this->assertEquals(15, $calculator->getResult());
    }

    public function testSubstractsNumbers() {
        $calculator = new Calculator;

        $calculator->subtract(5);

        $this->assertEquals(-5, $calculator->getResult());
    }

}
