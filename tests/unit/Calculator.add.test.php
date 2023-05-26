<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Demo\Calculator;

$data = [
    3 => [
        'a' => 1,
        'b' => 2,
    ],
    0 => [
        'a' => -1,
        'b' => 1,
    ],
    1 => [
        'a' => 0,
        'b' => 1,
    ],
    1000 => [
        'a' => 999,
        'b' => 1,
    ],
    999 => [
        'a' => 1000,
        'b' => -1,
    ],
    4 => [
        'a' => 2,
        'b' => 2,
    ],
];

$calculator = new Calculator();
foreach ($data as $expected => $input) {
    try {
        $result = $calculator->add(...$input);
    } catch (\RuntimeException $e) {
        $result = \RuntimeException::class;
    }
    if ($result !== $expected) {
        throw new \RuntimeException("{$input['a']} + {$input['b']} should equal $expected, $result returned 🔥");
    }
}

echo "All tests passed! 🍺 in " . __FILE__ . PHP_EOL;
return 0;
