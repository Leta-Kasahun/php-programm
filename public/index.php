<?php
require __DIR__ . '/../vendor/autoload.php';

use Mycompany\PhpProgramm\Controllers\AuthController;

// Start session
session_start();

// Create controller
$auth = new AuthController();

// Example: Registration
$result = $auth->register("Leta Kasahun", "leta@example.com", "secret123");
echo $result['message'] . PHP_EOL;

// Example: Login
$result2 = $auth->login("leta@example.com", "secret123");
echo $result2['message'] . PHP_EOL;

// Example: Access session
if (isset($_SESSION['user_name'])) {
    echo "Logged in as: " . $_SESSION['user_name'];
}

// Example: Logout
 $auth->logout();
