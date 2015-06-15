<?php
  include('passwords.php');
  session_start(); //Start session
    $_SESSION["password"] = $_POST["password"];
?>

<?php
  if($_SESSION["password"] == $password) {
?>

  <h1>Welcome!</h1>

  <p><a href="logout.php">Log out</a></p>
  
<?php
  }else {
    $error = "Username or Password is incorrect";
?>
  
<p>Password is invalid. Return to <a href="index.php">Log in page and try again!</a></p>

<?php
  }
?>
