<?php 
function sibiligs($Lname,...$fname){
    $text="";
    $len=count($fname);
    for ($i=0;$i<$len;$i++){
        $text=$text." Hi, $fname[$i] $Lname <br/>";
    }

    return $text;
}
$fn=sibiligs("Father","Son1","Son2","Doughter1","Doughter2");
echo "$fn <br/>";
?>