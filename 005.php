<?php

$array1 = ["grape","apple","orange","guava"];
$array2 = ["watermelon","apple","orange","strawberry"];

$merge = array_merge($array1, $array2);
$results = array_unique($merge);
sort($results);

var_dump($results);

?>