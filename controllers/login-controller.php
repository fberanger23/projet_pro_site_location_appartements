<?php

$password = '$2y$10$q08eHduAXOxNeizSAtI8BOaeIoaxvUB3AcOYVgYO0ndktDy7E9t8e';
$login = '$2y$10$lrJiPZMi.B9c5aBGhF0sg.QNR6hAYBDuwoKGo1i0SVOn4ioYvVS/C';

if (isset($_POST['login'])) {

    if (password_verify($_POST['password'], $password) && password_verify($_POST['username'], $login)) {
        $_SESSION['admin'] = true;
        header('Location: dashboard.php');
    } else {
        echo 'Mot de passe / Login incorrect';
    }
}
