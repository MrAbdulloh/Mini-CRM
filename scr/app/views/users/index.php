<?php

namespace App\views\users;

use App\Models\User;

$title = "User list";
$users = new User();
$all_users = $users->readAll();
//echo "<pre>";
//print_r($users);
//echo "</pre>";
ob_start();
?>

    <h1>User list </h1>
    <a href="index.php?page=users&action=create" class="btn btn-primary">Create User</a>
    <table class="table align-middle">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Login</th>
            <th scope="col">Admin</th>
            <th scope="col">Create At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($all_users as $user): ?>
            <tr>

                <th scope="row"><?= $user['id'] ?></th>
                <td><?= $user['login'] ?></td>
                <td><?= $user['is_admin'] ? 'Yes' : 'No' ?></td>
                <td><?= $user['created_at'] ?></td>
                <td>
                    <a href="index.php?page=users&action=edit&id=<?=$user['id']?>" class="btn btn-primary">Edit</a>
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