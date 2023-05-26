<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Demo\Calculator;

$calculator = new Calculator();
$result = $calculator->add(1, 2);

if ($result !== 3) {
    throw new \RuntimeException("1 + 2 should equal 3, $result returned 🔥");
}

echo "All tests passed! 🍺 in " . __FILE__ . PHP_EOL;
return 0;
