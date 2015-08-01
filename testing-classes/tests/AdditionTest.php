<?php

class AdditionTest extends PHPUnit_Framework_TestCase {

    public function testAddsNumbers()
    {
        $addition = new Addition();

        $result = $addition->run(5, 5);

        $this->assertSame(10, $result);
    }

}
