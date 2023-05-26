<?php

namespace Demo;

class Multiplication implements CalculateInterface
{
    public function calculate($a, $b)
    {
        return $a * $b;
    }
}
