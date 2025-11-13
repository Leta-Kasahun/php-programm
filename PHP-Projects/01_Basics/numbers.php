<?php 
$num1=110;
$num2=30.9;
var_dump(is_int($num1));
echo "<br/>";
var_dump(is_int($num2));
echo "<br/>";
if(is_int($num1))echo "It is an Integer Numbur";
else echo "Not int";
echo "<br/>";
if(is_float($num2))echo "it is floating number";
else echo "Not float";
echo "<br/>";
echo !(is_nan(300));
echo "<br/>";
echo is_nan(acos(1.01));
$num=20048;
echo "<br/>";
if(is_nan($num))echo "it is not a number";
else echo "No it is a number";
echo "<br/>";

echo (max(2,10,89,30));
echo "<br/>";
echo (max([22,3,56,8,90]));
$randumnumber=mt_rand(10,50);
echo "<br/>";
echo $randumnumber;
echo "<br/>";
echo pow(10,3);
?>