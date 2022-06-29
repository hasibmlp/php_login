<?php

$localhost = 'localhost';
$user = 'hsb';
$pass = '123456';
$name = 'php_proj';

$conn = mysqli_connect($localhost, $user, $pass, $name);

if (!$conn) {
    die('connection error' . mysqli_connect_error());
}
