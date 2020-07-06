<?php

echo "Silahkan input umur anda ! \n";
$age = trim(fgets(STDIN));

if ($age >= 21) {
    echo "Dewasa";
}elseif ($age >= 13) {
    echo "Remaja";
}elseif ($age >= 9) {
    echo "Bimbingan Orang Tua";
}elseif ($age < 9) {
    echo "Semua Usia";
}

?>