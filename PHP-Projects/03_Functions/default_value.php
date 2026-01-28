<?php
function func($value1,$value2="vlue two"){
    return $value1." ".$value2;
}
echo func("value1");
echo "<br>";
echo func("value1","value3");