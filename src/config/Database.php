<?php
// src/Config/Database.php

namespace Mycompany\PhpProgramm\Config;

use PDO;
use PDOException;

class Database
{
    private string $host = "localhost";
    private string $db_name = "test";
    private string $username = "postgres";
    private string $password = "postgres123";

    public function getConnection(): PDO
    {
        try {
            return new PDO(
                "pgsql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
