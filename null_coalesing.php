<?php
include "typed_properties.php";
$users = [ new User(1, 'sara') , new User(2, 'ahmed')];
// Ternary Operator
//$response = count($users) ? $users : "NO Users !!";

//Null Coalesing Operator
$response = $users ?? "No Users !!";
print_r($response);