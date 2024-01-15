<?php
  session_start();
  if (isset($_SESSION['username'])) {
    "Welcome to the page!"; // len pak hapsire aty nalt te faqja se i kom lan veq sa me testu...

    if ($_SESSION['role'] == 'admin') {
      echo 'You are logged in as admin.';
    }
  } else {
    echo 'Please log in';
  }
?>