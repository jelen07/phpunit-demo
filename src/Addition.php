<?php

namespace Demo;

class Addition implements CalculateInterface
{
    public function calculate($a, $b)
    {
        return $a + $b;
    }
}
