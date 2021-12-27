<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin') {
    $myfile = fopen('pswd.txt', 'r');
    $pswd = fread($myfile, filesize('pswd.txt'));
    if (password_verify($password, $pswd)) {
        header('location: info.php');
    } else {
        header('location: index.php');
    }
}
