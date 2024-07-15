<?php


$num1 = 10; $num2 = 15; $num3 = 6;

if ($num1 > $num2 && $num1 > $num3) {
    printf("%d is the largest number",$num1);
}
elseif ($num2 > $num1 && $num2 > $num3) {
    printf("%d is the largest number",$num2);
}
else{
    printf("%d is the largest number",$num3);
}