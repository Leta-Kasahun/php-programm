<?php
namespace Mycompany\PhpProgramm\Controllers;

use Mycompany\PhpProgramm\Services\AuthService;

class AuthController {
    private $authService;

    public function __construct() {
        $this->authService = new AuthService();
    }

    public function register($fullname, $email, $password) {
        return $this->authService->register($fullname, $email, $password);
    }

    public function login($email, $password) {
        return $this->authService->login($email, $password);
    }

    public function logout() {
        $this->authService->logout();
    }
}
