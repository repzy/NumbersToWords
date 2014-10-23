<?php

include 'Calculator.php';

	if(isset($_POST["number"])){
        $number = $_POST["number"];
        if(strlen($number)>1 && $number{0}==0){
            echo "Incorrect number";
        }elseif (ereg("^[0-9]{0,9}$",$number)){
            $calc = new Calculator($number);
            echo($calc->choose($number));
        }else{
            echo "Incorrect number";
        }
    }
?>