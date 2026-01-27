<?php 
$cars=array("Volvo","BMW","Toyota");
foreach($cars as $car)echo "$car <br/>";
$fruits=["mango","apple","banana","avocado"];
for($i=0;$i<count($fruits);$i++)echo $fruits[$i]."<br>";
echo $fruits[count($fruits)-1];
?>