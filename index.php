<?php
  session_start();

  //Check if user is authenticated and if not, route to login.php
  
?>

<!DOCTYPE html>

<html>
  <head>
    <title> Index </title>
  </head>
  
  <body>
    <?php echo '<h2>Welcome to the Landing Page of Assignment 1</h2>'; ?> 
    <p> Welcome... <?php $_SESSION['username'] ?> </p>
    <?php echo '<p> Click on the button to get to the login page and get started. </p>'; ?>
    <a href="login.php">
      <button id="go" name="go" type="button"> Go To Login Page </button>
    </a>
</html>
