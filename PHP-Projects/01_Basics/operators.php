<?php 
$num1=68;
$num2="68";
var_dump($num1==$num2) ;
var_dump($num1===$num2);
$num3=70;
echo "<br/>";
echo "\nthe sum is: $num1+$num3 = ".$num1+$num3;
echo "<br/>";
echo "\nthe sum is: $num1+$num2 = ".$num1+$num2;
//increment and decrement inphp
echo "<br/>";
echo "\nIncreament: ".++$num1;
echo "<br/>";
echo "\nDecreament: ".--$num1;
echo "<br/>";
echo "\nIncreament: ".$num3++;
echo "<br/>";
echo "\nIncreament: ".$num3--;

//logical oprators
$n1=34;
$n2=45;
echo "<br/>";
if($n1<=$n2 and $num2<$num1)echo "\nthe condition is true";
else echo "\nthe condition is False";
echo "<br/>";
if($n1<=$n2 or $num2<$num1)echo "\nthe condition is true";
else echo "\nthe condition is False";
echo "<br/>";
$areU=true;
if(!$areU)echo "\nThis is not U";
else echo "\nWelcome this is U";

//ternery oprators
$status="anonymous";
echo "<br/>";
echo $status=(empty($user))?"anonymous":"Logged In";
echo "<br/>";
$user="Leta Kasahun";
echo $status=(empty($user))?"anonymous":"Logged In";

?>