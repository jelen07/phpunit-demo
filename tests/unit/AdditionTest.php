<?php

namespace Tests\Demo;

use Demo\Addition;
use PHPUnit\Framework\TestCase;

final class AdditionTest extends TestCase
{
    public function testAddition(): void
    {
        $addition = new Addition();
        $this->assertSame(3, $addition->calculate(1, 2));
    }
}
