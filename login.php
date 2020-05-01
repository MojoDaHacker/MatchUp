<?php 
require 'header.php';
?>


    <body>
        <div>
            <?php
            if (($_SESSION['loggedIn'])) {
                #$_SESSION['loggedIn'] = false;
                echo "You are already logged in!";?>
                <a href="index.php">Go to Main Page!</a>
                <br><br>
            <?php  }else { ?>
            <form action="process.php" method="post">
                <label for="user">Firstname</label><br>
                <input type="text" id="user" name="user"><br>
                <label for="pass">Password</label><br>
                <input type="password" id="pass" name="pwd"><br>
                <input type="submit" name="formType" value="Login">
            </form>
            <a href="register.php"><button id="reg">Register</button></a>
            <?php } ?>
        </div>
    </body>
</html>