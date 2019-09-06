<?php
//Ex1
$even_nums = [2, 4, 6];
$odd_nums = [1, 3, 5];
$total = [...$even_nums, 100, 102, ...$odd_nums];
print_r($total);

//Ex2
function testFunc(...$args){
    print_r($args);
}
testFunc(1,2,4,'refaat',100);