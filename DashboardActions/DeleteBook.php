<?php
include_once('../logInFunc/handleUserSession.php');
include_once('../CRUD/User.php');
include_once('../CRUD/Books.php');
include_once('../CRUD/Functions.php');

$function=new Functions();
$user = new User();

$bookId=$_GET['id'];
$adminId = $user->getUserIdByUsername($_SESSION['username']);
// $adminId =  $userData['userId'];

$function->insertLogForBook($adminId,"Deleted",$bookId);

$function->deleteBook($bookId,'komenti');
$function->deleteBook($bookId,'autorilibri');
$function->deleteBook($bookId,'librat');


header("location:../Dashboard.php");


?>