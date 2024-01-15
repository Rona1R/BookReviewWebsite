<?php
  session_start();
  if (isset($_SESSION['username']) && $_SESSION['logged_in'] == true) {
    
    if ($_SESSION['role'] == 'admin') {
      echo "<script>alert('Welcome to the page as admin.')</script>";
    }
    else{
      echo "<script>alert('Welcome to the page as user.')</script>";
    }

  }
  else {
  // echo "<script>alert('Please log in.')</script>";
  header('Location:LogInRegister.php');
  }
?>
