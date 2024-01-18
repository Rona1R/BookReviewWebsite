
<?php
  session_start();
  $hide = "";
  if (isset($_SESSION['username']) && $_SESSION['logged_in'] == true) {
    
    if ($_SESSION['role'] == 'admin') {
      echo "<script>alert('Welcome to the page as admin.')</script>";
      $hide="";
    }
    else{
      echo "<script>alert('Welcome to the page as user.')</script>";
      $hide="adminDashboard"; # vendose klasen Hide per dashboard( .hide= display none ne css) qe useri te mos kete qasje ne te 
    }

  }
  else {
  // echo "<script>alert('Please log in.')</script>";
  header('Location:LogInRegister.php');
  }
?>
