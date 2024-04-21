<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        require_once dirname(__DIR__)
            . DIRECTORY_SEPARATOR . 'Views'
            . DIRECTORY_SEPARATOR . 'home'
            . DIRECTORY_SEPARATOR . 'index.php';
    }
}
