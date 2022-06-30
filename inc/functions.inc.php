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

   }
   else {
    $result = false;
    
}
return $result;
}
function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function passMatch($pass, $passRep) {
    $result;
    if ($pass !== $passRep) {
        $result = true;

    }
    else {
        $result = false;

    }
    return $result;

}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signin.php?error=stmtfailed');
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

     if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    } 
    mysqli_stmt_close($stmt);
}


    
    function createUser($conn, $name, $email, $username, $pass, $passRep) {
        $sql = "INSERT INTO users (userName, userEmail, userUid, userPass) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location: ../signin.php?error=stmtfiled');
            exit();
        }
    $hasedPass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hasedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../signin.php?error=none');
}
function emptyInputLogin($username, $pass)  {
    $result;
    if (empty($username) || empty($pass)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;

}
function loginUser($conn, $username, $pass) {
    $userExists = uidExists($conn, $username, $username);
    if ($userExists === false) {
        header('location: ../signin.php?error=wronglogin');
        exit();
        

    }
    
    $passHashed = $userExists["userPass"];
    $checkPass = password_verify($pass, $passHashed);
    

    
    if($checkPass === false) {
        header('location: ../login.php?error=wrongPass');
        exit();
    }else if($checkPass === true) {
        session_start();
        $_SESSION['userId'] = $userExists['userId'];
        $_SESSION['userUid'] = $userExists['userUid'];
        header("location: ../index.php");
        exit();
        
    }
}
