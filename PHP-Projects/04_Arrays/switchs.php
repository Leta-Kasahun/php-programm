<?php
$method="bank";
switch($method){
    case "card":
        echo " pay with card";
        break;
    case "cash":
        echo "pay at delivery";
        break;
    case "bank":
        echo "show bank details";
        break;
        default:
        echo "Invalid payment method";    
}
?>