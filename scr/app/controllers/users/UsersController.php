<?php

namespace App\controllers\users;

use App\models\User;

class UsersController
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->readAll();
        require 'app/views/users/index.php';
    }

    public function create()
    {
        require 'app/views/users/create.php';
    }

    public function store()
    {

        if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['is_admin'])) {
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            if ($password !== $confirm_password) {
                echo "Passwords do not match";
                return;
            } else {
                $userModel = new User();
                $userModel->create($_POST);
            }
        }
        header('Location: index.php?page=users ');
    }
}