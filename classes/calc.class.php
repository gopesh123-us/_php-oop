<?php

declare(strict_types=1);

class Calc {
    private int $num1;
    private int $num2;
    private string $operation;

    function __construct(int $theNum1, int $theNum2, string $theOperation) {
        $this->num1 = $theNum1;
        $this->num2 = $theNum2;
        $this->operation = $theOperation;
    }

    function calculate() {

        switch ($this->operation) {
            case 'add': {
                    return $this->num1 + $this->num2;
                    break;
                }
            case 'sub': {
                    return $this->num1 - $this->num2; # code...
                    break;
                }
            case 'div': {
                    return $this->num1 / $this->num2; # code...
                    break;
                }
            case 'mul': {
                    return $this->num1 * $this->num2; # code...
                    break;
                }
            default:
                echo "Error!";
                break;
        }
    }
}
