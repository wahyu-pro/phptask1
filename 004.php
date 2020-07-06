<?php

$products = [
    "grape" => "fruit",
    "apple" => "fruit",
    "spinach" => "vegetable",
    "eggplant" => "vegetable"
];
$category = array();
foreach ($products as $cat) {
    array_push($category, $cat);
}
$category = array_unique($category);
$data = array();
foreach ($products as $key => $value) {
    foreach ($category as $kategori) {
        if ($value == $kategori) {
            $data[$kategori][] = $key;
        }
    }
}
print_r($data);
