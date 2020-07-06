<?php

for ($i=1; $i <= 1000; $i++) { 
    if ($i % 2 == 1) {
        if ($i % 5 == 0) {
            echo $i." Ganjil Kelipatan 5 \n";
        }else{
            echo $i." Ganjil \n";
        }
    }elseif ($i % 2 == 0) {
        if ($i % 5 == 0) {
            if ($i % 100 == 0) {
                echo "$i Kelipatan 100 \n";
            }else{
                echo "$i Genap Kelipatan \n";
            }
        }else{
            echo "$i Genap \n";
        }
    }
}

?>