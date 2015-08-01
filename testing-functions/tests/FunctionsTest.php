<?php

class FunctionsTest extends PHPUnit_Framework_TestCase {

    public function testGeneratesAnchorTags() {
        $actual = link_me_to('dogs/1', 'Show Dog');

        $expect = "<a href='http://:/dogs/1'>Show Dog</a>";

        $this->assertEquals($actual, $expect);
    }

    public function testAppliesAttributesUsingArray() {
        $actual = link_me_to('dogs/1', 'Show Dog', ['class' => 'button']);

        $expect = "<a href='http://:/dogs/1' class='button'>Show Dog</a>";

        $this->assertEquals($actual, $expect);
    }

}
