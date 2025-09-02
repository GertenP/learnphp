<?php

$array = array(1, 2, 3, 4, 5);
$array = [1, 2, 3, 4, 5, 6];

$array = [
    'name' => 'Gerten',
    'age' => 18,
    'gender' => 'male',
    'isCool' => TRUE
];

$array = [
    6 => 'lol',
    1,
    2,
    1 => 3,
    'name' => 'Gerten',
    'age' => 18,
    'gender' => 'male',
    'isCool' => TRUE,
    4,
    5
];



var_dump($array['isCool']); // int(1)

$array = [1, 2, 3];
array_push($array, 4);

$array[] = 5;
var_dump($array);