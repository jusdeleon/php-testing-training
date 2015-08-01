<?php

class MultiplicationTest extends PHPUnit_Framework_TestCase {

    public function testMultipliesNumbers()
    {
        $multiplication = new Multiplication();

        $result = $multiplication->run(10, 5);

        $this->assertSame(50, $result);
    }

}


