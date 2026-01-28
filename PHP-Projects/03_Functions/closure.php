<?php

$greet = function () {
    return "Hello welcome to closure function";
};

echo $greet();

$totalprice=function($price,$qty){
    return $price*$qty;
};
echo "<br>";
echo $totalprice(200,80);

$taxRate=0.15;
$addTax=function($price) use ($taxRate){
    return $price+($price*$taxRate);
};
echo "<br>";
echo $addTax(200);


$tax=0.1;
$prices=[100,200,300];
$withTax=array_map(function($price)use ($tax){
    return $price+$price*$tax;
},$prices);

echo "<br>";
echo implode(", ",$withTax);


$Strings=["ABC","DEF","GHI","JKL"];
$lowercase=array_map(function($string){
    return strtolower($string);
},$Strings);
echo "<br>";
echo implode("  ",$lowercase);
  