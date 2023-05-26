<?php

namespace Demo;

class Calculator implements CalculatorInterface
{
    public function __construct(
        private readonly Addition $addition,
        private readonly Subtraction $subtraction,
        private readonly Multiplication $multiplication,
        private readonly Division $division,
    ) {}

    public function add($a, $b)
    {
        return $this->addition->calculate($a, $b);
    }

    public function subtract($a, $b)
    {
        return $this->subtraction->calculate($a, $b);
    }

    public function multiply($a, $b)
    {
        return $this->multiplication->calculate($a, $b);
    }

    public function divide($a, $b)
    {
        return $this->division->calculate($a, $b);
    }
}
