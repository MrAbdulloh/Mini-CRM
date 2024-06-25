<?php
namespace App\views\users;

$title = "User list";
ob_start();
?>


<h1>Edit User</h1>
<form method="post" action="index.php?page=users&action=update&id=<?= $user['id'] ?>">
    <div class="form-group">
        <label for="login">Username</label>
        <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" id=""
               placeholder="Username">
    </div>
    <br>
    <div class="form-group">
        <label for="login">Email</label>
        <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" id="" placeholder="Email">
    </div>
    <br>
    <div class="form-group">
        <label for="login">Role</label>
        <select class="form-control" name="role" id="role">
            <option value="0"<?= $user['role'] == 0 ? 'selected' : ''; ?>>User</option>
            <option value="1"<?= $user['role'] == 1 ? 'selected' : ''; ?>>Content Creator</option>
            <option value="2"<?= $user['role'] == 2 ? 'selected' : ''; ?>>Editor</option>
            <option value="3"<?= $user['role'] == 3 ? 'selected' : ''; ?>>Admin</option>
        </select>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$content = ob_get_clean();
include 'app/views/layout.php';
?>
