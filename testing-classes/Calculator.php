<?php

class Calculator {
    
    private $result = 0;

    public function getResult() {
        return $this->result;
    }

    public function add() {
        foreach (func_get_args() as $number) {
            if ( ! is_numeric($number)) {
                throw new InvalidArgumentException;
            }

            $this->result += $number;
        }
    }

    public function subtract() {
        foreach (func_get_args() as $number) {
            if ( ! is_numeric($number)) {
                throw new InvalidArgumentException;
            }

            $this->result -= $number;
        }
    }

}
