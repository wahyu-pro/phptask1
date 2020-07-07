<?php

$products = [
    "grape" => "fruit",
    "apple" => "fruit",
    "spinach" => "vegetable",
    "eggplant" => "vegetable"
];

foreach ($products as $key => $value) {
    $data[$value][] = $key;
}

print_r($data);
