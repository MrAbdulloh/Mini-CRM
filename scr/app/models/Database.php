<?php

namespace App\models;

class Database
{
    private static $instance = null;
    private $conn;
    private $host = "db";
    private $user = 'root';
    private $pass = 'password';
    private $name = 'dbname';

    private function __construct()
    {
        $this->conn = new \mysqli($this->host, $this->user, $this->pass, $this->name);
        if ($this->conn->connect_error) {
            die('Connect Error (' . $this->conn->connect_errno . ') ' . $this->conn->connect_error);
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }


}
