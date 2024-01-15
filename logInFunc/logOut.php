<?php 

// to be continued

session_start();

$_SESSION = array();

session_destroy();


header('Location:../LogInRegister.php');
?>