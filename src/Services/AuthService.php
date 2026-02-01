<?php
namespace Mycompany\PhpProgramm\Services;

use Mycompany\PhpProgramm\Models\User;

class AuthService {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function register($fullname, $email, $password) {
        // Check if email exists
        if ($this->user->findByEmail($email)) {
            return ["success" => false, "message" => "Email already registered"];
        }

        $this->user->fullname = $fullname;
        $this->user->email = $email;
        $this->user->password = password_hash($password, PASSWORD_DEFAULT);

        if ($this->user->create()) {
            return ["success" => true, "message" => "User registered successfully"];
        }

        return ["success" => false, "message" => "Registration failed"];
    }

    public function login($email, $password) {
        $userData = $this->user->findByEmail($email);
        if ($userData && password_verify($password, $userData['password'])) {
            session_start();
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['user_name'] = $userData['fullname'];
            return ["success" => true, "message" => "Login successful"];
        }
        return ["success" => false, "message" => "Invalid credentials"];
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
    }
}
