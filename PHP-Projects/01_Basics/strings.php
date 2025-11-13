<?php
$name="Leta P";
echo "$name this is double string";
echo "<br/>";
echo '$name thie is single cahracter'; 
//string concatneations
$fristName="My First Name";
$lastName ="  My Last Name";
$fullname=$fristName.$lastName;
echo "<br/>";
echo "Full Name: ".$fullname;
echo "<br/>";
echo "Modification of string: ".strtoupper($fullname);
echo "<br/>";
echo "Modification of string: ".strtolower($fullname);
echo "<br/>";
echo "Modification of string: ".strrev($fullname);
echo "<br/>";
echo "Modification of string: ".trim($fullname);
?>