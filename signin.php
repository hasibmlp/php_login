<?php include_once 'inc/header.php' ?>

<section class="">
    <h2 style="text-align:">Sign Up</h2>
    <div class="">
       <center>
           
           <form style="width: 200px" action="inc/signup.inc.php" method="POST">
               <input style= "padding: 5px" type="text" name="name" placeholder="Enter your name">
               <input style= "padding: 5px" type="text" name="email" placeholder="Enter your email">
               <input style= "padding: 5px" type="text" name="uid" placeholder="Enter your username">
               <input style= "padding: 5px" type="password" name="pass" placeholder="Enter your password">
               <input style= "padding: 5px" type="password" name="pass_re" placeholder="Re-enter password">
               <button style= "padding: 5px" type="submit" name="submit">Submit</button>
   
           </form>
       </center> 
    </div>
</section>

<?php include_once 'inc/footer.php' ?>