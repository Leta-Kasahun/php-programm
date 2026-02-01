<?php
namespace Mycompany\PhpProgramm\Models;

use PDO;
use Mycompany\PhpProgramm\Config\Database;

class User {
    private $conn;
    private $table = "users";

    public $id;
    public $fullname;
    public $email;
    public $password;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

   
    public function create() {
        $query = "INSERT INTO {$this->table} (fullname, email, password) VALUES (:fullname, :email, :password)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':fullname', $this->fullname);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password); 
        return $stmt->execute();
    }


    public function findByEmail($email) {
        $query = "SELECT * FROM {$this->table} WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
