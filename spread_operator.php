<?php
//Ex1
function getEvenNums() {
    $even_nums = [2, 4, 6];
    return $even_nums;
}

$odd_nums = [1, 3, 5];
//$total = array_merge([102],getEvenNums(),[100],$odd_nums,[103]);
$total = [102, ...getEvenNums(), 100, ...$odd_nums, 103];
print_r($total);

//Ex2
function testFunc(...$args) {
    foreach ($args as $arg) {
        if ($arg % 2 == 0) {
            print_r($arg * 2 . "\n");
        } else {
            print_r($arg * 1 . "\n");
        }
    }
}
testFunc(1, 2, 3, 4);