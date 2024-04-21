<?php

namespace App\Controllers;

class UserController
{
    public function index()
    {
        require_once dirname(__DIR__)
            . DIRECTORY_SEPARATOR . 'Views'
            . DIRECTORY_SEPARATOR . 'user'
            . DIRECTORY_SEPARATOR . 'index.php';
    }

    public function show($id = null)
    {
        
        require_once dirname(__DIR__)
            . DIRECTORY_SEPARATOR . 'Views'
            . DIRECTORY_SEPARATOR . 'user'
            . DIRECTORY_SEPARATOR . 'profile.php';
    }
}
