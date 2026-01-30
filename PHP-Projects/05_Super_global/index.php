<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/index.php"method="post">
        <input type="text"name="username"placeholder="username"><br>
        <input type="password"name="password"placeholder="password"><br>
        <input type="submit" value="login">

    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{$un=$_POST["username"];
$p=$_POST["password"];
if(empty($un)||empty($p))echo "all Fields are required";
else echo "username $un and $p is login";}
?>