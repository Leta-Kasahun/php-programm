<?php 
function familyName($fname,$year){
    echo "$fname Born in $year <br/>";
}
familyName("Abel",1995);
familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

function defaultArg($name,$email="email@example.com"){
    echo "Name: $name Email: $email <br/>";
}
defaultArg("Abebe");
defaultArg("Able","able@example.com");

?>