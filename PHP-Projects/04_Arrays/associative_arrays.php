<?php 
$cars=["Brand"=>"Ford","model"=>"Mustang","name"=>"Toyota"];
foreach($cars as $key=>$value){
    echo$key.": ".$value ."<br/>";}
  $users=[["name"=>"Leta","age"=>22,"password"=>123],
  ["name"=>"Teku","age"=>21,"password"=>124],
    ];
    echo "<br>";
    echo$users[0]['age'];
    echo "<br>";

?>