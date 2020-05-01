<?php
  include 'header.php';
?>


<div>
  <form action="process.php" method="POST">
    <h2>Confirm your username and password to delete account:</h2>
    <input type="text" name="user" placeholder="Firstname">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="formType" value="delete">Delete</button>
  </form> 
</div>