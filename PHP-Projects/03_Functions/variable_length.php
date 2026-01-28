<?php
function add(...$nums){
    return array_sum($nums);
}
echo add(50,60);
echo "<br>";
echo add(10,20,30,40,50,60);
echo "<br>";
echo add(10,20,30,40,50,60,80);