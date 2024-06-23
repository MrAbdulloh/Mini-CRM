<?php
namespace App\views\users;

$title = "User list";
ob_start();
?>


<h1>Edit User</h1>
<form method="post" action="index.php?page=users&action=update&id=<?=$user['id']?>">
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" name="login" class="form-control" value="<?= $user['login'] ?>" id="" placeholder="Login">
    </div>
    <br>
    <div class="form-group">
        <label for="admin">Admin</label>
        <select name="is_admin" id="admin" class="form-control">
            <option value="0" <?php if (!$user['is_admin']) {echo 'selected';} ?> >No</option>
            <option value="1" <?php if ($user['is_admin']) {echo 'selected';} ?> >Yes</option>
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$content = ob_get_clean();
include 'app/views/layout.php';
?>
