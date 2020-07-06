<?php

echo "Jumlah array kecuali bilangan terkecil \n";
$numbers = [3,1,4,5,6,8];
unset($numbers[min($numbers)]);
echo array_sum($numbers)."\n";

?>