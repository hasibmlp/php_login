<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <style>
            h1 {
        color: #344;
        text-align: center;
        margin: 10px;
        }
        h4 {
        color: red;
        text-align: center;
        margin: 10px;
        size: 11px;
        }
        .signup-form {
            width: 200px;
            margin: auto;
        }
        input {
            width: 100%;
            padding: 15px;
            border: 0px ;
            margin: 10px;
            border-bottom: 1px solid #eee;
            box-shadow: 0 0 10px 2px rgba(0,0,0,0.2);
            border-radius: 20px;
        }
        button {
            appearance: none;
            -webkit-appearnace: none;
            padding: 10px;
            border: none;
            background-color: blue;
            color: white;
            border-radius: 20px;
            width: 100px;
            margin: 10px;
        }
        
        
    </style>
    

    <title>login</title>
</head>
<body>
    <section>
        <nav>

            <ul>
                <li><a href="index.php">Home1</a></li>
                <?php 
                
                if(isset($_SESSION['userId'])) {
                    echo '<li><a href="profile.php">Profile</a></li>';
                    echo '<li><a href="inc/logout.inc.php">Logout</a></li>';
                    
                } else {
                    echo '<li><a href="signin.php">Signup</a></li>';
                    echo '<li><a href="login.php">Login</a></li>';
                } ?>
                <li><a href="about.php">About</a></li>
             </ul>
        </nav>
    </section>
    <section>