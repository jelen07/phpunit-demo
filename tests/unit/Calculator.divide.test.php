<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Demo\Calculator;

$data = [
    [[
        'a' => 1,
        'b' => 1,
    ], 1],
    [[
        'a' => 1,
        'b' => 2,
    ], 0.5],
    [[
        'a' => 2,
        'b' => 1,
    ], 2],
    [[
        'a' => 1,
        'b' => 0,
    ], \RuntimeException::class],
    [[
        'a' => 0,
        'b' => 1,
    ], 0],
    [[
        'a' => 0,
        'b' => 0,
    ], \RuntimeException::class],
    [[
        'a' => 1,
        'b' => -1,
    ], -1],
    [[
        'a' => -1,
        'b' => 1,
    ], -1],
    [[
        'a' => 1,
        'b' => 4,
    ], .25],
    [[
        'a' => 10,
        'b' => 2,
    ], 5],
    [[
        'a' => -1,
        'b' => -1,
    ], 1],
    [[
        'a' => 4,
        'b' => 40,
    ], 0.1],
    [[
        'a' => 123,
        'b' => 0,
    ], \RuntimeException::class],
];

$calculator = new Calculator(
    new \Demo\Addition(),
    new \Demo\Subtraction(),
    new \Demo\Multiplication(),
    new \Demo\Division()
);
$errors = [];
foreach ($data as list($input, $expected)) {
    try {
        $result = $calculator->divide(...$input);
    } catch (\RuntimeException $e) {
        $result = \RuntimeException::class;
    }
    if ($result !== $expected) {
        $exception = new \RuntimeException("{$input['a']} / {$input['b']} should equal $expected, $result returned 🔥");
        $errors[] = $exception->getMessage();
        echo 'F';
        continue;
    }

    echo '.';
}

if ($errors) {
    echo PHP_EOL;
}

array_walk($errors, static function ($error)  {
    echo $error . PHP_EOL;
});

echo PHP_EOL . "All tests passed! 🍺 in " . __FILE__ . PHP_EOL;
return 0;
