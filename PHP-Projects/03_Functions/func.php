<?php
function foo($arg1,$arg2){
    return $arg1 . $arg2;
}
echo foo(true,true);
echo "<br>";
echo foo("Abebe","Kebede");
function outside(){
    function inside(){return "Inside function";}
    return "out side functions";
}
echo "<br>";
echo outside();
echo inside();