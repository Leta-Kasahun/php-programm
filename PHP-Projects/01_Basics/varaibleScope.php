<?php 
echo "This is varable scope in PHP\n";
$globalVarable="I am global varable";
function testVarable(){
    global $globalVarable;
    $localVarable="I am local varable";
    echo "<p>this is testing local: $localVarable  $globalVarable</p>";
}
echo" <p>Outside of the function: $globalVarable</p>";
testVarable();
?>