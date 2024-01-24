<?php
include_once('../logInFunc/handleUserSession.php');
include_once('../CRUD/Functions.php');
include_once('../CRUD/Books.php');

$bookId=$_GET['id'];

$bookObj = new Books();
$bookData = $bookObj->getBookById($bookId);
$autori = $bookObj->getAuthor($bookData['BookTitle']);

if(isset($_POST['editSubmit'])){
    $Genre = $_POST['Genre']; 
    $Src= $_POST['src']; 
    $BookTitle = $_POST['bookTitle'];

    $f = new Functions();
    $f->editBook($bookId,$Genre,$Src,$BookTitle);
    header('Location: ../Dashboard.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="../CSS/LogInRegister.css">
</head>
<body>
<div class="LogInBox">
        <div class="SignIn">
            <div class="SignInTop">
                <img alt="LOGO" src="../FOTOT/7naIo6-LogoMakr.png">
                <p>Edit Book</p>
            </div>
            <form  id='editBookForm' method="POST">
                <div class="SignInInfo">
                    <label for="Genre" class="SignInLabel">Genre:</label>
                    <input type="text" id="Genre" name="Genre" value="<?php echo $bookData['Genre']?>">
                </div>

                <div class="SignInInfo">
                    <label for="src" class="SignInLabel">Src:</label>
                    <input type="text" id="src" name="src" value="<?php echo $bookData['Src']?>">
                </div>

                <div class="SignInInfo">
                    <label for="bookTitle" class="SignInLabel">BookTitle:</label>
                    <input type="text" id="bookTitle" name="bookTitle" value="<?php echo $bookData['BookTitle']?>">
                </div>
                
                <div class="SignInInfo">
                    <label for="authorName" class="SignInLabel">Name:</label>
                    <input type="text" id="authorName" name="authorName"  value="<?php echo $autori['Emri']?>">
                </div>

                <div class="SignInInfo">
                    <label for="authorLastName" class="SignInLabel">LastName:</label>
                    <input type="text" id="authorName" name="authorLastName"  value="<?php echo $autori['Mbiemri']?>">
                </div>
            
                <div class="SubmitArea">
                    <button type="submit" name='editSubmit'>Save</button>
                    
                </div>
            </form>
        </div>
    </div>
</body>






<style>
    .SubmitArea{
        padding-top: 10px;
    }
</style>
</html>

