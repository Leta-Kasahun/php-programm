<?php 

$n=6;
$original=$n;
$fact=1;
while($n>0){
    $fact*=$n;
    $n--; 
}
echo "<br/>";
echo "Factorial of $original!=".$fact;

echo "<br/>";

//contnueu
$t=10;
while($t>=1){
    echo $t;
    $t--;
    if($t==5)continue;
    echo "<br/>";

    //do while
    $num=10;
    $sum=0;
    do{
        echo $sum;
        $sum+=$num;
        $num--;
        echo "<br/>";

    }
  while($num>=1);
}
?>