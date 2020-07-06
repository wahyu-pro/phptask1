<?php

echo "Silahkan input String! \n";
$inputstring = trim(fgets(STDIN));

$tmp = '';    $i = 0;

while (isset($inputstring[$i])){
    $tmp .= $inputstring[$i];
    $i++;
}

echo $i;

?>