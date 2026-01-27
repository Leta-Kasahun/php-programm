<?php

$users=["admin","editor","guest"];
foreach ($users as $user){
if($user=="admin")echo "Granted Full access"."<br>";
else if($user=="editor")echo "granted only to edit"."<br>";
else echo "limited  to access privilege"."<br>";
}
?>