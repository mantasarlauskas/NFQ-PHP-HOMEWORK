<?php
namespace file2;

use MathPHP\Arithmetic;
use MathPHP\Algebra;

function getCubeRoot($x)
{
    return $x > 0 ? Arithmetic::cubeRoot($x) : null;
}

function getFactors($x)
{
    return $x > 0 ? Algebra::factors($x) : null;
}
