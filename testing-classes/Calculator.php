<?php

class Calculator {
    
    private $result = 0;

    public function getResult() {
        return $this->result;
    }

    public function add() {
        $this->calculateAll(func_get_args(), '+');
    }

    public function subtract() {
        $this->calculateAll(func_get_args(), '-');
    }

    protected function calculateAll(array $numbers, $symbol) {
        foreach ($numbers as $number) {
            if ( ! is_numeric($number)) {
                throw new InvalidArgumentException;
            }
            $this->calculate($number, $symbol);
        }
    }

    protected function calculate($number, $symbol) {
        switch ($symbol) {
            case '+':
                $this->result += $number;
                break;
            case '-':
                $this->result -= $number;
                break;
        }
    }

}
