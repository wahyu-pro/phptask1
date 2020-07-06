<?php

echo "Silahkan input tahun ! \n";
$tahun = trim(fgets(STDIN));

if ($tahun % 4 == 0) {
    if ($tahun % 100 == 0) {
        if ($tahun % 400 == 0) {
            echo "Tahun $tahun adalah tahun kabisat";
        }else{
            echo "Tahun $tahun bukan tahun kabisat";
        }
    }else{
        echo "Tahun $tahun adalah tahun kabisat";
    }
}else{
    echo "Tahun $tahun bukan tahun kabisat";
}

?>