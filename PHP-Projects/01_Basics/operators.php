<?php 
$num1=68;
$num2="68";
var_dump($num1==$num2) ;
var_dump($num1===$num2);
$num3=70;
echo "\nthe sum is: $num1+$num3 = ".$num1+$num3;
echo "\nthe sum is: $num1+$num2 = ".$num1+$num2;
//increment and decrement inphp
echo "\nIncreament: ".++$num1;
echo "\nDecreament: ".--$num1;
echo "\nIncreament: ".$num3++;
echo "\nIncreament: ".$num3--;

//logical oprators
$n1=34;
$n2=45;
if($n1<=$n2 and $num2<$num1)echo "\nthe condition is true";
else echo "\nthe condition is False";
if($n1<=$n2 or $num2<$num1)echo "\nthe condition is true";
else echo "\nthe condition is False";
?>