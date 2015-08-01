<?php

class SubtractionTest extends PHPUnit_Framework_TestCase {

    public function testSubtractsNumbers()
    {
        $subtraction = new Subtraction();

        $result = $subtraction->run(5, 10);

        $this->assertSame(5, $result);
    }

}

