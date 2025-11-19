<?php
$stock=[["Volvo",22,18],["Volvo",22,18],["Saab",5,2],["BMW",15,13],["Land",22,18]];
echo "<p><b>data</b></p><br/>";
for ($i=0;$i<=4;$i++){
   
   echo "<ul>";
   for ($j=0;$j<=2;$j++){
    echo "<li>".$stock[$i][$j]."</li><br/>";
   }
}
?>