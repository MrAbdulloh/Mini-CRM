<?php

namespace App\models;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function readAll()
    {
        $result = $this->db->query("SELECT * FROM users");
        $users = [];
        while ($row = $result->fetch_all(MYSQLI_ASSOC)) {
            $users = $row;
        }
        return $users;
//        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data)
    {
        $login = $data['login'];
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
//        $admin = isset($data['is_admin']) ? 1 : 0;
        $admin = !empty($data['is_admin']) ? 1 : 0;
        date_default_timezone_set("Asia/Tashkent");
        $created_at = date('Y-m-d H:i:s');

        $stmt = $this->db->prepare("INSERT INTO users (login, password, is_admin, created_at) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $login, $password, $admin, $created_at);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }
}