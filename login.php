<?php include_once 'inc/header.php' ?>

<section class="">
    <h1>login</h1>
    <div class="">
        <center>
           
           <form style="width: 200px" action="inc/login.inc.php" method="POST">
               <input style= "padding: 5px" type="text" name="uid" placeholder="Username/Email">
               <input style= "padding: 5px" type="password" name="pass" placeholder="Enter your password">
               <button style= "padding: 5px" type="submit" name="submit">Submit</button>
   
           </form>
       </center> 
    </div>
</section>

<?php include_once 'inc/footer.php' ?>