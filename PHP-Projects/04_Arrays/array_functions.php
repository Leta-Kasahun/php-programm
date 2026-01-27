<?php
$user=["name"=>"leta","email"=>"leta@gmail.com","password"=>123];
if(isset($user["email"]))echo "full creadential"."<br>";
$nums=[23,56,45,33,23,21,-12];
echo"<br>";
// adding at the ends of elemets
array_push($nums,100);
foreach($nums as $num)echo $num;
echo "<br>";
//adding at the begning
array_unshift($nums,-100);
foreach($nums as $num)echo $num;
echo "<br>";
//remove from te end with pop and from the bengining with shift;
array_pop($nums);
array_shift($nums);
 foreach($nums as $num)echo $num;
 //adding and removing from the elemets  with indexs  using splice
 array_splice($nums,3,1,100);
 echo "<br>";
 foreach($nums as $num)echo $num."<br>";
 echo "<br>";
//filtering data;
$key=array_search(100,$nums);
echo $key;
//sorting
echo "<br>";
rsort($nums);
foreach($nums as $num)echo $num."<br>";
echo "<br>";
//filtering greter than 50 numbers
$values=array_values($user);
$keys=array_keys($user);
echo "<br>";
foreach($values as $value)echo$value;
echo "<br>";
foreach($keys as $key)echo$key;
echo "<br>";
$gt50=array_filter($nums,fn($n)=>$n>=50);
foreach($gt50 as $gt50s)echo $gt50s;
//mapint to get new manuplatet array
$squared=array_map(fn($n)=>$n**2,$nums);
echo "<br>";
foreach($squared as $sq)echo$sq."<br>";
?>