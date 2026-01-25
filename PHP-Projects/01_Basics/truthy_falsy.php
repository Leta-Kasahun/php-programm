<?php 
$values=[0,"false","0",true,-1,1,null,"",[],40];
foreach($values as $value)echo var_dump((bool)$value)."<br>";
?>