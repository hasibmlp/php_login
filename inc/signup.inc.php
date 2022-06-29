<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $pass = $_POST['pass'];
    $passRep = $_POST['pass_rep'];


require_once '../config/database.php';
require_once 'functions.inc.php';


// error handler
if (emptyInputSignup($name, $email, $username, $pass, $passRep) !== false) {
    header('location: ../signin.php?error=emptyForm');
    exit();
}
if (invalidUid($username) !== false) {
    header('location: ../signin.php?error=invalidName');
    exit();
}
if (invalidEmail($email) !== false) {
    header('location: ../signin.php?error=invalidEmail');
    exit();
}

// if (passMatch($pass, $passRep) !== false) {
//     header('location: ../signin.php?passNotMatch');
//     exit();
// }
// if (uidExists($conn, $username, $email) !== false) {
//     header('location: ../signin.php?usernameTaken');
//     exit();
// }

// createUser($conn, $name, $email, $username, $pass, $passRep);

}else {
    header('location: ../signin.php');
    exit();
}
`