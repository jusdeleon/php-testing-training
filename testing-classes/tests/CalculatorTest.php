<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

    protected $calculator;

    public function setUp() {
        $this->calculator = new Calculator;
    }

    public function testAddsNumbers() {

        $mock = Mockery::mock('Addition');

        $mock->shouldReceive('run')
            ->once()
            ->with(5, 0)
            ->andReturn(5);

        $this->calculator->setOperands(5);

        $this->calculator->setOperation($mock);

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

        $result = $this->calculator->calculate();

        $this->assertEquals(15, $result);
    }

    public function testSubstractsNumbers() {

        $this->calculator->setOperands(5);

        $this->calculator->setOperation(new Subtraction);

        $result = $this->calculator->calculate();

        $this->assertEquals(-5, $result);
    }

    /**
     * The next two tests are redundant, since we are now leveraging polymorphism.
     * They're unneccesary.
     */
    public function testMultipliesNumbers() {
        $this->calculator->setOperands(5, 5);

        $this->calculator->setOperation(new Multiplication);

        $result = $this->calculator->calculate();

        $this->assertEquals(25, $result);
    }

    public function testDividesNumbers()
    {
        $this->calculator->setOperands(25, 5);

        $this->calculator->setOperation(new Division);

        $result = $this->calculator->calculate();

        $this->assertEquals(5, $result);
    }

}
