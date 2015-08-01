<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

    protected $calculator;

    public function setUp() {
        $this->calculator = new Calculator;
    }

    public function testResultDefaultsToZero() {
        $this->assertSame(0, $this->calculator->getResult());
    }

    public function testAddsNumbers() {
        $this->calculator->add(5);

        $this->assertSame(5, $this->calculator->getResult());
    }
    
    /**
     *  @expectedException InvalidArgumentException
     */
    public function testRequiresNumericValue() {
        $this->calculator->add('This must throw an exception');
    }

    public function testAcceptsMultipleArgs() {
        $this->calculator->add(1, 2, 3, 4, 5);

        $this->assertEquals(15, $this->calculator->getResult());
    }

    public function testSubstractsNumbers() {
        $this->calculator->subtract(5);

        $this->assertEquals(-5, $this->calculator->getResult());
    }

}
