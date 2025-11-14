<?php 
$favcolor="black";
switch ($favcolor) {
    case 'green':
        echo "Your favorite color is green!";
        break;
    case "red":
        echo "your favorite color is red";
        break;

    case "blue":
        echo "Your favoirite color is blue";
        break;        
    
    default:
        echo "Your favorite color is neither green nor blue or red";
        
}

echo "<br/>";
$day=4;
switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
        echo "The weeks feels so long!";
        break;
    case 5:
    case 6:
        echo "Weekends are Best!";
    case 7:
        echo "This is the best weeknds amonung all!";
        break;
    default:
    echo "some thing is went wrong" ;                  

}
?>