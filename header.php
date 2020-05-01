<?php session_start();
  if (isset($_POST['logout'])) {
    $_SESSION['loggedIn'] = false;
  }
  if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MatchUp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/MatchUp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body> 
    <header class="row">
          <div class="headLogo col-sm-2">
            <img src="images/DIG3147_LOGO.svg" style="width: 100px;" alt="LOGO">
          </div>
          <div class="headNav col-sm-7">
            <nav>
              <ul>
                <li><a class="navLink" href="index.php">Home</a></li>
                <li><a class="navLink" href="contact.php">Contact Us</a></li>
                <li><a class="navLink" href="index.php">Explore</a></li>
                <li><a class="navLink" href="index.php">Connect</a></li>
              </ul>
            </nav>
          </div>
          <div class="headRegWrapper col-sm-3">
            <div class="headReg">
              <?php if ($_SESSION['loggedIn']){ ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Delete Account
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Are you sure you want to delete your account?</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <a href="delete.php"><button type="button" class="btn btn-danger" >Yes, Im Sure</button></a>
                      </div>

                    </div>
                  </div>
                </div>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                  <input type="submit" name="logout" value="Log Out">
                </form>
              <?php } else { ?>
              <a class="login" href="login.php">Log In</a>
              <a class="signin btn btn-primary" href="register.php">Join Now</a>
              <?php } ?>
            </div>
          </div>
        </header>