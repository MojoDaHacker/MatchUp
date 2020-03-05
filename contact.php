<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MatchUp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/MatchUp.css">
  </head>
  <body>
    <div class="heroPicWrapper container-fluid">
      <header class="row">
        <div class="headLogo col">
          <img src="images/DIG3147_LOGO.svg" style="width: 100px;" alt="LOGO">
        </div>
        <div class="headNav col">
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./contact.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="headRegWrapper col">
          <div class="headReg">
            <a class="login" href="#">LOG IN</a>
            <a class="signin btn btn-outline-primary" href="#">JOIN NOW</a>
          </div>
        </div>
      </header>
      <div class="heroTextWrapper row">
        <div class="heroText col">
          <h2 class="">Contact Us At Anytime!</h2>
          <p><h3>Please provide your full name, phone number, email, and a message and
            we will make sure to get back to you in the next 24 - 48 hours. Thank you!
          </h3></p>
        </div>
        <?php      //php Here!
          if (isset($_GET['fullName'])) {
            echo "<div class='heroContact col' style='color: white;'><p>We have received your message! We will send a reply to the email " ,$_GET['email'],
             " in the next 24-48 hours. Thank you.</p></div>";
          } else {
            echo '
            <div class="heroContact col">
              <form method="get" action="contact.php">
                <input class="contact" type="text" id="fullName" name="fullName" placeholder="Enter Full Name"><br>
                <input class="contact" type="text" id="phoneNum" name="phone" placeholder="Enter Phone Number"><br>
                <input class="contact" type="email" id="email" name="email" placeholder="Enter Email"><br>
                <textarea class="contact" type="text" id="message" name="message" placeholder="Enter Message"></textarea><br>
                <input type="submit" value="Send Now!">
              </form>
            </div>';
          }
        ?>
      </div>
    </div>
    <footer>

    </footer>
  </body>
</html>
