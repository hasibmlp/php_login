<?php

function emptyInputSignup($name, $email, $username, $pass, $passRep) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pass) || empty($passRep)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;

}
function invalidUid($username) {
    $result;
   if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;

   }else {
    $result = false;
    
}
return $result;
}
function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;


    }else {
        $result = false;
    }
    return $result;
}
function passMatch($pass, $passRep) {
    $result;
    if ($pass !== $passRep) {
        $result = true;


    }else {
        $result = false;
    }
    return $result;
}

// function uidExists($conn, $username, $email) {
//     $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
//     $stmt = mysqli_stmt_init($conn);

//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header('location: ../signin.php?error=stmtfailed');
//         exit();
//     }
//     mysqli_stmt_bind_param($stmt, "ss", $username, $email);
//     mysqli_stmt_execute($stmt);

//     $resultData = mysqli_stmt_get_result($stmt);

//      if($row = mysqli_fetch_assoc($resultData)) {
//         return $row;
//     }
//     else {
//         $result = false;
//         return $result;
//     } 
//     mysqli_stmt_close($stmt);
// }


    
    // function createUser($conn, $name, $email, $username, $pass, $pass) {
    //     $sql = "INSERT INTO users (userName, email, username, userPass) VALUES (?, ?, ?, ?);";
    //     $stmt = mysqli_stmt_init($conn);
        
    //     if (!mysqli_stmt_prepare($stmt, $sql)) {
    //         header('location: ../signin.php?error=none');
    //         exit();
    //     }
    // $hasedPass = password_hash($userPass, PASSWORD_DEFAULT);

    // mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hasedPass);
    // mysqli_stmt_execute($stmt);
    // mysqli_stmt_close($stmt);
    // header('location: ../signin.php?error=none');
// }