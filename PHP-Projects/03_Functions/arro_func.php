<?php
$tax=0.1;
$prices=[1000,2000,1400];
$totalPrice=array_map(fn($price)=>$price+$price*$tax,$prices);
echo implode(", ",$totalPrice);
$users=[["name"=>"leta","active"=>true],["name"=>"sara","active"=>false]];
echo "<br>";
foreach($users as $key=>$value)echo$value['name'];
$activeusers=array_filter($users,fn($u)=>$u["active"]);
echo "<br>";
foreach($activeusers as $key=>$value)echo$value['name'];