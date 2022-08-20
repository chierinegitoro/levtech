<?php
    class animal{

        public $cry = "".PHP_EOL;

        function bow(){
            echo $this->cry;
        }   

    }

    $dog = new animal();
    $cat = new animal();

    $dog -> cry = "bowbow!";
    $cat -> cry = "mewmew!";

    $dog -> bow();
    $cat -> bow();

?>