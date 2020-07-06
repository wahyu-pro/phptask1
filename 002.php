<?php

for($i=100; $i<=200; $i++){
    if ($i > 1){
        for ($a=2; $a<=$i; $a--){
            if($i % $a ==0){
            break;
            }else{
                echo " $i";
            }
        }
    }
}

?>