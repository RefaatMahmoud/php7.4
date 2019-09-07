<?php
$users = [
    ["id" => 1 , "name" => "ahmed"],
    ["id" => 2 , "name" => "said"],
    ["id" => 3 , "name" => "sara"],
];
/*
//Function
$test = array_map(
    function ($user) {
        return $user;
    },
    $users
);
*/
//Arrow Function
$test = array_map(fn($user) => "ID : $user[id] , Name : $user[name]", $users);
print_r($test);