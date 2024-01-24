<?php

include_once('../CRUD/User.php');
include_once('../CRUD/Functions.php');
$userId=$_GET['id'];


$function=new Functions();

$function->deleteUser($userId,'komenti');
$function->deleteUser($userId,'users');

header("location:../Dashboard.php");


?>