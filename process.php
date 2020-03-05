<?php
  $name = $pwd = "";
  $nameErr = $pwdErr = "";

  function testInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      $nameErr = "Name is required";
    } else {
      $name = testInput($_POST["username"]);
    }
  
    if (empty($_POST["password"])) {
      $pwdErr = "Email is required";
    } else {
      $pwd = testInput($_POST["password"]);
    }


    #check if login credentials are correct
    //return 1 for incorrect username
    //return 2 for inccorect password
    if ($name == 'dig3134user') {
      if ($pwd == 'dig3134pass') {
        $cookie_name = "login";
        $cookie_value = "DIG_Student";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
      }else {
        $loginErr = 'Password Incorrect';
      }
    }else {
      $loginErr = 'Username Incorrect';
    }
  
  }

  echo $name, $pwd;
  echo $_POST["username"], $_POST["password"];

?>