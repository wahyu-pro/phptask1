<?php

function myfunction($v)
{
    return($v*$v);
}

$products = [
    "grape"=>"fruit",
    "apple"=>"fruit",
    "spinach"=>"vegetable",
    "eggplant"=>"vegetable"
];

array_fill();
// array_keys($products);
// array_filter($products);

var_dump($products);
// $a=array(1,2,3,4,5);
// print_r(array_map("myfunction",$a));
