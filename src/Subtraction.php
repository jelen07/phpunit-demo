<?php

namespace Demo;

class Subtraction implements CalculateInterface
{
    public function calculate($a, $b)
    {
        return $a - $b;
    }
}
