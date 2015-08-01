<?php

class DivisionTest extends PHPUnit_Framework_TestCase {

    public function testDividesNumbers()
    {
        $division = new Division();

        $result = $division->run(5, 10);

        $this->assertSame(2, $result);
    }

}

