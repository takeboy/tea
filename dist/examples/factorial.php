<?php
namespace tea\examples;

require_once __DIR__ . '/__unit.php';

function factorial(int $n): int {
	if ($n > 1) {
		return $n * factorial($n - 1);
	}

	return 1;
}

#internal
const NUM = 10;

// ---------
echo NUM . '! = ' . factorial(NUM), NL;
// ---------

// program end
