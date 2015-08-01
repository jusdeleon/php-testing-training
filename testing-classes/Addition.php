<?php

class Addition implements Operation {

    public function run($number, $current) {
        return $current + $number;
    }

}
