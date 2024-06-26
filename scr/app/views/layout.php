<?php
//namespace App\views\layout;
//use App\views\users;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="index.php?home">crm_for_telegram</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=users">Users</a>
        </li>
    </ul>
<!--    <nav class="navbar navbar-expend-lg navbar-light bg-light">-->
<!--        <div class="navbar-collapse" id="navbarNav">-->
<!--            <a class="navbar-brand " href="index.php?home">crm_for_telegram</a>-->
<!--            <ul class="navbar-nav">-->
<!--                <li class="nav-item">-->
<!--                    <a href="index.php?page=users" class="nav-link">Users</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->
    <div class="container mt-4">
        <?php echo $content; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>