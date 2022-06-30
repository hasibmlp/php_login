<?php include_once 'inc/header.php' ?>

<section class="">
    <h1>Sign Up</h1>
    <center>
    <div style="width: 300px">
       
           
           <form class= "signup-form-form" action="inc/signup.inc.php" method="POST">
               <input type="text"  name="name"  placeholder="Enter your name">
               <input  type="text" name="email" placeholder="Enter your email">
               <input  type="text" name="uid" placeholder="Enter your username">
               <input  type="password" name="pass" placeholder="Enter your password">
               <input  type="password" name="pass_rep" placeholder="Re-enter password">
               <button  type="submit" name="submit">Submit</button>
   
           </form>
      
    </div>
    </center> 
    <?php if (isset($_GET['error'])) {
        if ($_GET['error'] === 'emptyForm') {
            echo '<h4>Fill in the form</h4';
        }else if ($_GET['error'] === 'invalidEmail') {
            echo '<h4>Invalid Email</h4';
        } else if ($_GET['error'] === 'invalidName') {
            echo '<h4>Invalid Username</h4';
        } else if ($_GET['error'] === 'passnotmatch') {
            echo '<h4>password not matching</h4';
        }  else if ($_GET['error'] === 'usernameexists') {
            echo '<h4>Username Taken</h4';
        }   else if ($_GET['error'] === 'stmtFailed') {
            echo '<h4>Something went wrong, try again..</h4';

        }   else if ($_GET['error'] === 'none') {
            echo '<h4>Created successully.</h4';
        }
    }
    ?>
</section>

<?php include_once 'inc/footer.php'; ?>