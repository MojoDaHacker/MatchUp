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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/MatchUp.css">
    <link rel="stylesheet" href="css/normalize.css">
  </head>
  <body class="container-fluid"> 
    <header class="navbar navbar-expand-sm header">
      <div class="headLogo">
        <img src="img/DIG3147_LOGO.svg" style="width: 100px;" alt="LOGO">
      </div> 
    </header>