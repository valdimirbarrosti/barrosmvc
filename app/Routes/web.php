<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;


$this->router->get('/', [HomeController::class, 'index']);
$this->router->get('/users', [UserController::class, 'index']);
$this->router->get('/users/123', [UserController::class, 'show']);
