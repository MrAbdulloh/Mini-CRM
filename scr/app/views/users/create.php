<?php
namespace App\views\users;

$title = "User list";
ob_start();
?>
<h1>Create user</h1>
<form method="post" action="index.php?page=users&action=store">
    <div class="form-group">
        <label for="login">Username</label>
        <input type="text" name="username" class="form-control" id="" placeholder="Username">
    </div>
    <br>
    <div class="form-group">
        <label for="login">Email</label>
        <input type="email" name="email" class="form-control" id="" placeholder="Email">
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
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$content = ob_get_clean();
include 'app/views/layout.php';
?>
