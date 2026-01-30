<?php
session_start();
if(!isset($_SESSION['user'])&& isset($_COOKIE['remember_user'])){
    $_SESSION['user']=$_COOKIE['remember_user'];
}
if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
echo "Welcome, " . htmlspecialchars($_SESSION['user']);
echo "<br><a href='logout.php'>Logout</a>";