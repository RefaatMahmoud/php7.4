<?php
$a = 1;
$b = 2;
$c = 3;
$result = (($a == 1 ? "One" : $b ) == 2 ? "Two" : $c )== 3 ? "Three" : "None";
print_r($result . "\n");
$sum = "Sum = " . ($a + $b);
print_r($sum . "\n");
