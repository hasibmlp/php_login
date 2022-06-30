<?php include_once 'inc/header.php' ?>

<section class="">
    <h1>login</h1>
    <center>
    <div style="width: 300px" >
           
           <form action="inc/login.inc.php" method="POST">
               <input  type="text" name="uid" placeholder="Username/Email">
               <input  type="password" name="pass" placeholder="Enter your password">
               <button  type="submit" name="submit">Submit</button>
   
           </form>
        </div>

            <div>
        <?php 
        if (isset($_GET['error'])) {
            if ($_GET['error'] === 'emptylogin') {
                echo '<h4>Fill Form</h4>';
            }
            if ($_GET['error'] === 'wronglogin') {
                echo '<h4>Please enter valid username/email</h4>';
            }
            if ($_GET['error'] === 'wrongPass') {
                echo '<h4>Wrong Password</h4>';
            }
        }
        
        ?>

</section>

<?php include_once 'inc/footer.php' ?>