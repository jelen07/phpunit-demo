<?php

namespace Demo;

interface CalculatorInterface
{
    public function add($a, $b);

    public function subtract($a, $b);

    public function multiply($a, $b);

    public function divide($a, $b);
}
