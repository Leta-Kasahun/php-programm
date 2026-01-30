<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: dashboard.php");
    exit;
}
?>
<form action=""method="POST">

 <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <label>
        <input type="checkbox" name="remember"> Remember Me
    </label><br>
    <button type="submit">Login</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username']?? '';
    $password=$_POST['password']?? '';
    if(empty($username)||empty($password)){
        echo "all fields are required";
        exit;
    }

    if($username=='admin'&&$password=='1234')
        {$_SESSION['user']=$username;
    if(isset($_POST['remember'])){
        setcookie('remeber_user',$username,time()+3600);
    }

    
    header('Location: dashboard.php');
    exit;
    }
    else{
        echo "invalid login";
    }
}
?>