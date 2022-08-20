<?php
    require('intput.php');

    for($i = 1; $i <= 100; $i++){
        if($i % 15 == 0){
            echo $array[$i]."\tFizzBuzz\n";
        }
        else if($i % 5 == 0){
            echo $array[$i]."\tBuzz\n";
        }
        else if($i % 3 == 0){
            echo $array[$i]."\tFizz\n";
        }
        else{
            echo $array[$i]."\n";
        }
    }

?>