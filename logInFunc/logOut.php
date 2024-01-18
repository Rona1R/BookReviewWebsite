<?php 

session_start();

// $_SESSION = array(); e panevojshme e komentova 

session_destroy();


header('Location:../LogInRegister.php');
?>