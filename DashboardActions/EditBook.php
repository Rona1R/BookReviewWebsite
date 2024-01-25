<?php
include_once('../logInFunc/handleUserSession.php');
include_once('../CRUD/Functions.php');
include_once('../CRUD/Books.php');
include_once('../CRUD/User.php');
$bookId=$_GET['id'];

$bookObj = new Books();
$bookData = $bookObj->getBookById($bookId);
$autori = $bookObj->getAuthor($bookData['BookTitle']);

$user = new User();
$userData = $user->getUserIdByUsername($_SESSION['username']);
// print_r( $userData);
$adminId =  $userData['userId'];

// print_r($autori);

// echo $_FILES["photo"]["name"];

if(isset($_POST['editSubmit'])){
    $Genre = $_POST['Genre']; 
    $Src = $bookData['Src'];
    $BookTitle = $_POST['bookTitle'];
    $autoriEmri = $_POST['authorName'];
    $autoriMbiemri = $_POST['authorLastName'];
    
    $f = new Functions();
    
    if(empty($_FILES["photo"]["name"])){ //no file chosen !! mos e ndrysho path (src duhet me mbejt i njejti qysh u kan)
        $f->editBook($bookId,$Genre,$Src,$BookTitle);
    }
    else{
        $imgSrc="FOTOT/".$_FILES["photo"]["name"]; 
        $f->editBook($bookId,$Genre,$imgSrc,$BookTitle);
    }
    $f->editAuthor($autori['IDAutori'],$autoriEmri,$autoriMbiemri);
    // $IDAdmin,$Ndryshimi,$IDBook
    $f->insertLogForBook($adminId,"Modified",$bookId);
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
            <form  id='editBookForm' method="POST" enctype="multipart/form-data">
                <div class="SignInInfo">
                    <label for="Genre" class="SignInLabel">Genre:</label>
                    <input type="text" id="Genre" name="Genre" value="<?php echo $bookData['Genre']?>">
                </div>

                <div class="SignInInfo">
                    <label for="photo" class="SignInLabel">Image:</label>
                    <input type="file" id="photo" name="photo">
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
</html>

