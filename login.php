<!DOCTYPE html>
<?php include 'process.php'; ?>

<html>
    <head></head>
    <body>
        <div>
            <form action="process.php" method="post">
                <div><span><?php echo $loginErr?></span></div>
                <input type="text" name="username" placeholder="Username" required autofocus>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Submit">
            <form>
        </div>
    </body>
</html>