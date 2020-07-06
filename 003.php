<?php

echo "Silahkan input angka! \n";
$num = trim(fgets(STDIN));

if ($num % 2 == 1) {
    echo "Imperio";
}elseif ($num % 2 == 0) {
    echo "Crucio";
}elseif ($num % 2 == 0) {
    if ($num >= 5  && $num <= 10 ) {
        echo "Imperio";
    }
} elseif ($num % 2 == 0) {
    if ($num > 20) {
        echo "Crucio";
    }
}

?>