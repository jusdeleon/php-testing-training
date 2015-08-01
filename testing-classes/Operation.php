<?php

interface Operation {

    /**
     * @param integer $number
     * @param integer $current
     * @return integer
     */
    public function run($number, $current);

}
