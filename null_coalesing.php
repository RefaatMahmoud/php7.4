<?php
include "typed_properties.php";
$users = [new User(1, 'sara'), new User(2, 'ahmed')];

//Ternary Operator
//$response = isset($users) ? $users : "No Users !! \n";

//Null Coalesing Operator
$response = $users ?? "No Users !! \n";

print_r($response);