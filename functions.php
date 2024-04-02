<?php
    session_start();

    function getUserList(){
        $users = json_decode(file_get_contents('users.json'), true);

        return $users;
    };

    function existsUser($login) {
        $loginExists = false;
        $users = getUserList();

        foreach ($users as $user) {
            if ($user['login'] === $login) {
                $loginExists = true;
                break;
            }
        }

        return $loginExists;
    }

    function checkPassword($login, $password) {
        $_SESSION['currentUser'] = null;
        $_SESSION['auth'] = false;
        $users = getUserList();

        // Проверяем наличие пользователя
        if (existsUser($login)) {
            foreach ($users as $user) {
                if ($user['login'] === $login && $user['password'] === sha1($password)) {
                    $_SESSION['currentUser'] = $user['name'];
                    $_SESSION['auth'] = true;
                    $_SESSION['firstTime'] = time();
                    $_SESSION['dob'] = $user['DoB'];
                    break;
                }
            }
        }

        return $_SESSION['auth'];
    }

    function getCurrentUser(){
        return $_SESSION['currentUser'];
    };