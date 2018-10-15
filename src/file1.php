<?php
namespace file1;

use MathPHP\Arithmetic;
use MathPHP\Algebra;

function getCubeRoot(float $x = 0) : ?float
{
    return $x > 0 ? Arithmetic::cubeRoot($x) : null;
}

function getFactors(int $x = 0) : ?array
{
    return $x > 0 ? Algebra::factors($x) : null;
}
