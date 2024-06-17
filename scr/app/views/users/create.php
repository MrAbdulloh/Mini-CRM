<?php
namespace App\views\users;

//use App\Models\User;

$title = "User list";
ob_start();
?>
<h1>Create user</h1>
<form method="post" action="index.php?page=users&action=store">
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" name="login" class="form-control" id="" placeholder="Login">
    </div>
    <br>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <br>
    <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1"
               placeholder="Confirm Password">
    </div>
    <br>
    <div class="form-group">
        <label for="admin">Admin</label>
        <select name="is_admin" id="admin" class="form-control">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$content = ob_get_clean();
include 'app/views/layout.php';
?>
