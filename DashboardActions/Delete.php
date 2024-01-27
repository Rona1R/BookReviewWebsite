<?php
include_once('../logInFunc/handleUserSession.php');
include_once('../CRUD/User.php');
include_once('../CRUD/Functions.php');

$userId=$_GET['id'];
$user = new User();

$function=new Functions();

$adminId= $user->getUserIdByUsername($_SESSION['username']);
// $adminId =  $userData['userId'];

$function->insertLogForUser($adminId,"Deleted",$userId);

$function->deleteUser($userId,'komenti');
$function->deleteUser($userId,'users');

header("location:../Dashboard.php");


?>