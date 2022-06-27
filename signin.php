<?php include_once 'inc/header.php' ?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <div class="signup-form-form">

        <form action="inc/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="text" name="email" placeholder="Enter your email">
            <input type="text" name="uid" placeholder="Enter your username">
            <input type="password" name="pass" placeholder="Enter your password">
            <input type="password" name="pass_re" placeholder="Re-enter password">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</section>

<?php include_once 'inc/footer.php' ?>