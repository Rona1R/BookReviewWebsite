<?php

include_once('../CRUD/Books.php');
include_once('../CRUD/Functions.php');
$bookId=$_GET['id'];
echo "IDDD";


$function=new Functions();

$function->deleteBook($bookId,'komenti');
$function->deleteBook($bookId,'autorilibri');
$function->deleteBook($bookId,'librat');

header("location:../Dashboard.php");


?>