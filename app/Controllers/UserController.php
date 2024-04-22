<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getUsers();
        require_once dirname(__DIR__)
            . DIRECTORY_SEPARATOR . 'Views'
            . DIRECTORY_SEPARATOR . 'user'
            . DIRECTORY_SEPARATOR . 'index.php';
    }

    public function show($id)
    {
        $userModel = new UserModel();
        $user = $userModel->getUserById($id);
        require_once dirname(__DIR__)
            . DIRECTORY_SEPARATOR . 'Views'
            . DIRECTORY_SEPARATOR . 'user'
            . DIRECTORY_SEPARATOR . 'profile.php';
    }
}
