<?php

abstract class AdminBase
{
    public static function checkAdmin()
    {
        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        if ($user['role'] == 'admin') {
            return true;
        }
        header("Location: /404.html");
        die;
    }
}