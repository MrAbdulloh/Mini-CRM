<?php
//require_once 'app/models/Database.php';
use App\controllers\users\AuthController;
use App\controllers\users\UsersController;
use App\models\Database;
use App\models\User;
use App\Router;

require_once 'vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


$router = new Router();
$router->run();

