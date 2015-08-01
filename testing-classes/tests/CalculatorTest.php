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

        $this->calculator->setOperands(5);

        $this->calculator->setOperation(new Addition);

        $result = $this->calculator->calculate();

        $this->assertSame(5, $result);
    }
    
    /**
     *  @expectedException InvalidArgumentException
     */
    public function testRequiresNumericValue() {
        $this->calculator->setOperands('five');

        $this->calculator->setOperation(new Addition);

        $this->calculator->calculate();
    }

    public function testAcceptsMultipleArgs() {
        $this->calculator->setOperands(1, 2, 3, 4, 5);

        $this->calculator->setOperation(new Addition);

        $this->calculator->calculate();

        $this->assertEquals(15, $this->calculator->getResult());
    }

    public function testSubstractsNumbers() {

        $this->calculator->setOperands(5);

        $this->calculator->setOperation(new Subtraction);

        $this->calculator->calculate();

        $this->assertEquals(-5, $this->calculator->getResult());
    }

}
