<?php

namespace Tests\Demo;

use Demo\Addition;
use PHPUnit\Framework\TestCase;

final class AdditionTest extends TestCase
{
    private readonly Addition $addition;

    public function setUp(): void
    {
        $this->addition = new Addition();
    }

    /**
     * @test
     * @dataProvider giveMeSomeTestingData
     */
    public function happyPath($a, $b, $expected): void
    {
        $this->assertSame($expected, $this->addition->calculate($a, $b));
    }

    public static function giveMeSomeTestingData(): array
    {
        return [
            [1, 2, 3],
            [2, 3, 5],
            [3, 4, 7],
            [-1, 1, 0],
            [0, 0, 0],
        ];
    }
}
