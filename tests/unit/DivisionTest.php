<?php

namespace Tests\Demo;

use Demo\Division;
use Demo\DivisionByZeroException;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    private readonly Division $division;

    public static function giveMeSomeTestingData(): array
    {
        return [
            [1, 2, 0.5],
            [2, 3, 0.6666666666666666],
            [3, 4, 0.75],
            [-1, 1, -1],
        ];
    }

    public static function giveMeSomeFailingTestData(): array
    {
        return [
            [0, 0],
            [1, 0],
            [2, 0],
            [3, 0],
            [-1, 0],
        ];
    }

    public function setUp(): void
    {
        $this->division = new Division();
    }

    /**
     * @test
     * @dataProvider giveMeSomeTestingData
     */
    public function happyPath($a, $b, $expected): void
    {
        $this->assertSame($expected, $this->division->calculate($a, $b));
    }

    /**
     * @test
     * @dataProvider giveMeSomeFailingTestData
     */
    public function failedPath($a, $b): void
    {
        $this->expectException(DivisionByZeroException::class);
        $this->division->calculate($a, $b);
    }
}
