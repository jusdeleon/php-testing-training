<?php

class Division implements Operation {

    public function run($number, $current) {
        if (is_null($current)) return $number;

        return $current / $number;
    }

}
