<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$root1 = file1\getCubeRoot(27);
$factors1 = file1\getFactors(5);
var_dump($root1, $factors1);

$root2 = file2\getCubeRoot(27);
$factors2 = file2\getFactors(5);
var_dump($root2, $factors2);


