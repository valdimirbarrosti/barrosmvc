<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;


$this->router->get('/', [HomeController::class, 'index']);

