<?php 
function addTen(&$value){
    $value+=10;

}
$num=20;
echo "Before passing: $num<br/>";
addTen($num);
echo "After passing: $num<br/>";

?>