<?php
//require_once 'app/models/Database.php';
use App\controllers\users\AuthController;
use App\controllers\users\UsersController;
use App\models\Database;
use App\models\User;
use App\Router;

require_once 'vendor/autoload.php';

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$router = new Router();
$router->run();

// Database.php

//$servername = "db";
//$username = "root";
//$password = "password";
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=dbname", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $stmt = $conn->query('SELECT * FROM `users`');
//    var_dump($stmt->fetch(PDO::FETCH_ASSOC));
////    echo "Connected successfully";
//} catch(PDOException $e) {
//    echo "Connection failed: " . $e;
//}
