<?php

namespace App;

use App\Router;

class App
{

    protected $router;

    public function __construct()
    {
        $this->router = new Router;
        $this->configureRoutes();
    }

    public function run()
    {
        $this->router->dispatch();
    }

    protected function configureRoutes()
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'Routes' . DIRECTORY_SEPARATOR . 'web.php';
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'Routes' . DIRECTORY_SEPARATOR . 'api.php';
    }
}
