<?php include_once 'inc/header.php'; ?>
    <?php 
                
                if(isset($_SESSION['userId'])) {
                    echo "<h2>Welcome " . $_SESSION['userUid'] . "</h2>";
                    
                } else {

                } ?>
        <h1>Home page</h1>
        <h4>hello</h4>



<?php include_once 'inc/footer.php' ?>