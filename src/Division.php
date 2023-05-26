<?php

namespace Demo;

class Division implements CalculateInterface
{
    public function calculate($a, $b)
    {
        if ($b !== 0) {
            return $a / $b;
        } else {
            throw new DivisionByZeroException("Cannot divide by zero");
        }
    }
}
