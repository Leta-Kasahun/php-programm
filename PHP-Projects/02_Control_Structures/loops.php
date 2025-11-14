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
    
}
$num=10;
    $sum=0;
    do{
        echo $sum;
        $sum+=$num;
        $num--;
        echo "<br/>";

    }
  while($num>=1);


  $num1=10;
  for ($i=0;$i<=$num1;$i++){
    if($i%2==0)echo "Even: <br/>";
    else echo "Odd: <br/>";
  }


  $colors=["red","blue","green","yellow"];
  foreach($colors as $color)echo "$color <br/>";

?>