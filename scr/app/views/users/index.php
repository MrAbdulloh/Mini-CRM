<?php

namespace App\views\users;

use App\Models\User;

$title = "User list";
$users = new User();
$all_users = $users->readAll();
//var_dump($all_users);

ob_start();
?>

    <h1>User list </h1>
    <a href="index.php?page=users&action=create" class="btn btn-primary">Create User</a>
    <table class="table align-middle">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Email verification</th>
            <th scope="col">Is admin</th>
            <th scope="col">Role</th>
            <th scope="col">Is active</th>
            <th scope="col">Last login</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($all_users as $user): ?>
            <tr>

                <th scope="row"><?= $user['id'] ?></th>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['email_verification'] ? 'Yes' : 'No' ?></td>
                <td><?= $user['is_admin'] ? 'Yes' : 'No' ?></td>
                <td><?= $user['role'] ?></td>
                <td><?= $user['is_active'] ? 'Yes' : 'No' ?></td>
                <td><?= $user['last_login'] ?></td>
                <td>
                    <a href="index.php?page=users&action=edit&id=<?= $user['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="index.php?page=users&action=delete&id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>

    <?php
$content = ob_get_clean();
include 'app/views/layout.php';
?>