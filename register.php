<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>MatchUp | Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/MatchUp.css">
    </head>
    <body>
        <div class="register"> 
            <form action="process.php" method="POST">
                <input type="text" name="fName" placeholder="First Name">
                <input type="text" name="lName" placeholder="Last Name">
                <input type="password" name="pwd" placeholder="Password">
                <input type="date" name="DOB">
                <input type="email" name="email" placeholder="Email">
                <input type="submit" name="formType" value="Register">
            </form>
        </div>
    </body>
</html>

