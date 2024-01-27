<?php 
include_once('../logInFunc/handleUserSession.php');
include_once('../CRUD/User.php');
include_once('../CRUD/Books.php');
include_once('../CRUD/Functions.php');

$function=new Functions();
$user = new User();

$commentId=$_GET['id'];
$adminId = $user->getUserIdByUsername($_SESSION['username']);
// $adminId =  $userData['userId'];

$function->insertLogForComment($adminId,"Deleted",$commentId);

$function->deleteComment($commentId);



header("location:../Dashboard.php");


?>