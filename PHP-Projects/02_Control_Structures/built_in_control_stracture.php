<?php

$username="letakasahun ";
$valid=ctype_alpha($username)?"valid username":"invalid username";
echo $valid;
$trimed=trim($username);
echo "<br>";
 if(ctype_upper($trimed))echo "upper case";
echo "<br>";
if (ctype_lower($trimed))echo "lower case";
echo "<br>";
if( ctype_digit($trimed))echo "it is digit";
echo "<br>";
echo strtoupper($trimed);
echo "<br>";
echo strtolower($trimed);
echo "<br>";
echo strlen($trimed);
?>