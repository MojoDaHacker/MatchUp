<?php 

  include 'database.php';
  session_start();
  if (!isset($_SERVER['REQUEST_METHOD'])) {
    echo "Go FUCK off!";
    $_SESSION['loggedIn'] = false;
  } else {
    switch ($_REQUEST['formType']) {
      case 'Register':
        if (!cleanInput()) {
          echo "Error Input Not Clean!";
        break;
        }else {
          accCreate(cleanInput());
        break;
        }
      case 'Login':
        accLogin(cleanInput(), 'USERLOGIN');
        break;
      case 'delete':
        accDelete();
        break;
      default:
        echo "Error";
        break;
    }
  }

?>


<?php //function list

  function testInput($data){

    return $data;
    }
  function accLogin($data, $table){
    if (testData($data, $table)) {
      $_SESSION['loggedIn'] = true; 
      
?>

      <a href="index.php"> Login Successful! Head Back to Login!</a>

<?php
    
  } else {
       $_SESSION['loggedIn'] = false; 
       
?>

      <a href="login.php">Login Unsuccesful! Please try again!</a>

<?php } }?>

<?php

  function accCreate($arr){ 
    if (insertData('USERLOGIN', 'MatchUp_USERDATA', $arr)) {
      $_SESSION['loggedIn'] = true;
    
?>

    <p>You are logged in!</p>
    <a href="index.php">Back to HomePage!</a>

<?php 
  
    } else {
      $_SESSION['loggedIn'] = false;

?>

      <a href="register.php">Registration Unsuccessful. Go Back.</a>

<?php
    
    }
  }
  function cleanInput(){
    $i = 0;
    foreach ($_REQUEST as $key => $value) {
      trim($value);
      strip_tags($value);
      stripslashes($value);
      htmlspecialchars($value);

      $data[$key] = $value;
      $i++;
    }
    //VALIDATE EMAIL
    if ($_REQUEST['formType'] == 'Register') {
      if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
        return false;
      }
    }
    return $data;
  }
  function accDelete(){
    $data = cleanInput();

    if (testData($data, 'USERLOGIN')) {
      if(remData($data, 'USERLOGIN')){
        echo "<a href='index.php'>Account Succesfully Deleted. Back To Homepage</a>";
      }else {
        echo "<a href='delete.php'>Account Unsuccesfully Deleted. Back To Homepage</a>";
      }
    } else {
      echo "<a href='delete.php'>Account Credentials Invalid!</a>";
    }
  }
?>