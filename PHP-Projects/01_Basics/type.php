<?php
$str=0.8;
echo get_debug_type($str);
echo "<br>";
if(is_string($str))echo "\nit is string";
else echo "no it is no string";
echo "<br>";
echo var_dump($str);
$bln= [];
$bln[0]=68;
$bln[1]="ab";
echo "<br>";
echo var_dump((bool)$bln);
echo "<br>";
foreach($bln as $bl)echo $bl."<br>"; 
?>