<?php

class Calculator {
    
    private $result = 0;

    private $operands;

    private $operation;

    public function calculate() {
        foreach ($this->operands as $operand) {
            if ( ! is_numeric($operand)) {
                throw new InvalidArgumentException;
            }

            $this->result = $this->operation->run($operand, $this->result);
        }

        return $this->result;
    }

    public function getResult() {
        return $this->result;
    }

    public function setOperands() {
        $this->operands = func_get_args();
    }

    public function setOperation(Operation $operation) {
        $this->operation = $operation;
    }

}
