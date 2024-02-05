<?php
include_once('../logInFunc/handleUserSession.php');
include_once('../CRUD/Functions.php');
include_once('../CRUD/Books.php');
include_once('../CRUD/User.php');

$bookObj = new Books();
$user = new User();
$adminId = $user->getUserIdByUsername($_SESSION['username']);
// $adminId = $userData['userId'];


$errorMessage = "";
if(isset($_POST['createSubmit'])){
    $genre = $_POST['Genre'];
    $BookTitle = $_POST['bookTitle'];
    $autoriEmri = $_POST['authorName'];
    $autoriMbiemri = $_POST['authorLastName'];
    $imgSrc="FOTOT/".$_FILES["photo"]["name"]; 

    if($genre == 'Romance' || $genre == 'Fantasy'){
        $errorMessage = "";
    }
    else{
        $errorMessage = "Genre name is not valid";
    }
    if(empty($genre) || empty($BookTitle) || empty($autoriEmri) || empty($autoriMbiemri) || empty($_FILES["photo"]["name"])){
        $errorMessage = "All fields are required!";
    }

    if(empty($errorMessage)){ // nese ska pas error kjo eshte empty dmth continue me insertimin ne db
        $f = new Functions();
        $bookId = $f->insertBook($genre,$imgSrc,$BookTitle,$autoriEmri,$autoriMbiemri);
        $bookObj->insertLastModified($_SESSION['username'],$bookId);
        $f->insertLogForBook($adminId,"Added",$bookId);
        header('Location:../Dashboard.php');
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
    <link rel="stylesheet" href="../CSS/LogInRegister.css">
</head>
<body>
<div class="LogInBox">
        <div class="SignIn">
            <div class="SignInTop">
                <img alt="LOGO" src="../FOTOT/7naIo6-LogoMakr.png">
                <p>Create Book</p>
            </div>
            <form  id='createBookForm' method="POST" enctype="multipart/form-data">
                <div class="SignInInfo">
                    <label for="Genre" class="SignInLabel">Genre:</label>
                    <input type="text" id="Genre" name="Genre">
                </div>

                <div class="SignInInfo">
                    <label for="photo" class="SignInLabel">Image:</label>
                    <input type="file" id="photo" name="photo">
                </div>

                <div class="SignInInfo">
                    <label for="bookTitle" class="SignInLabel">BookTitle:</label>
                    <input type="text" id="bookTitle" name="bookTitle">
                </div>
                
                <div class="SignInInfo">
                    <label for="authorName" class="SignInLabel">Name:</label>
                    <input type="text" id="authorName" name="authorName">
                </div>

                <div class="SignInInfo">
                    <label for="authorLastName" class="SignInLabel">LastName:</label>
                    <input type="text" id="authorName" name="authorLastName">
                </div>
            
                <div class="SubmitArea">
                    <button type="submit" name='createSubmit'>Create</button>
                    <p style='color:red'><?php echo $errorMessage?></p>
                </div>
            </form>
        </div>
    </div>


    <style>
        #photo{
            border: none;
        }
        input[type="file"] {
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            color: black;
            /* font-size: 16px; */
        }
    </style>
</body>
