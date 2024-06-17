<?php

namespace App;

use App\controllers\users\UsersController;

class Router
{
    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        switch ($page) {
            case 'users':
                $controller = new UsersController();
                if (isset($_GET['action'])) {
                    switch ($_GET['action']) {
                        case 'create':
                            $controller->create();
                            break;
                        case 'store':
                            $controller->store();
                            break;
                    }
                } else {
                    $controller->index();
                }
                break;
            default:
                http_response_code(404);
                echo "Page not found";

        }
    }
}