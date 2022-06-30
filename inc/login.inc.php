<?php
if (isset($_POST['submit'])) {

    $username = $_POST['uid'];
    $pass = $_POST['pass'];

    require_once '../config/database.php';
    require_once 'functions.inc.php';

    // error handilg

    if (emptyInputLogin($username, $pass) !== false) {
        header('location: ../login.php?error=emptylogin');
        exit();
    }

    loginUser($conn, $username, $pass);



}else {
    header('location: ../login.php');
    exit();
}