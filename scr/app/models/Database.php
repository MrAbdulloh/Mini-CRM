<?php

namespace App\models;

class Database
{
    private static $instance = null;
    private $conn;
//    private $host = "localhost";
////    private $host = "db";
//    private $user = 'root';
//    private $pass = '';
////    private $pass = 'password';
//    private $name = 'dbname';

//    private function __construct()
//    {
//        $this->conn = new \mysqli($this->host, $this->user, $this->pass, $this->name);
//        if ($this->conn->connect_error) {
//            die('Connect Error (' . $this->conn->connect_errno . ') ' . $this->conn->connect_error);
//        }
//    }
    private function __construct()
    {
        $config = require_once __DIR__ . '/../../config.php';
        $db_host = $config['db_host'];
        $db_user = $config['db_user'];
        $db_pass = $config['db_pass'];
        $db_name = $config['db_name'];

        try {
            $dsn = "mysql:host=$db_host;dbname=$db_name";
            $this->conn = new \PDO($dsn, $db_user, $db_pass);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connect failed" . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }


}
