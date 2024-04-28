<?php

namespace App\Classes;

class Calculator
{
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function divide($num1, $num2)
    {
        if ($num2 == 0) {
            throw new \InvalidArgumentException("Cannot divide by zero");
        }
        return $num1 / $num2;
    }
}