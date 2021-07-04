<?php

// you can change the numbers
$num1 = 5;
$num2 = 10;

// you can choose the operator sign and comment the others
$sign = " + ";
// $sign = " - ";
// $sign = " * ";
// $sign = " / ";


switch($sign){
    case " + ":
        echo $num1 + $num2;
        break;
    case " - ":
        echo $num1 - $num2;
        break;
    case " * ":
        echo $num1 * $num2;
        break;
    case " / ":
        echo $num1 / $num2;
        break;
}

// for testing
//echo $num1.$sign.$num2;

?>