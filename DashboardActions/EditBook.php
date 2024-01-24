<?php
include_once('../logInFunc/handleUserSession.php');
include_once('../CRUD/Functions.php');
include_once('../CRUD/Books.php');

$bookId=$_GET['id'];

$bookObj = new Books();
$bookData = $bookObj->getBookById($bookId);

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
                <p>Edit User</p>
            </div>
            <form  id='editUserForm' method="POST">
                <div class="SignInInfo" id="UsernameBox">
                    <label for="Genre" class="SignInLabel">Genre:</label>
                    <input type="text" id="Genre" name="Genre" value="<?php echo $bookData['Genre']?>">
                </div>

                <div class="SignInInfo" id="emailBox">
                    <label for="src" class="SignInLabel">Src:</label>
                    <input type="text" id="src" name="src" value="<?php echo $bookData['Src']?>">
                </div>

                <div class="SignInInfo" id="roleBox">
                    <label for="bookTitle" class="SignInLabel">BookTitle:</label>
                    <input type="text" id="bookTitle" name="bookTitle" value="<?php echo $bookData['BookTitle']?>">
                </div>

                <!-- <div class="SignInInfo">
                    <label for="passwordEdit" class="SignInLabel">Password:</label>
                    <input type="text" id="passwordEdit" name="passwordEdit" value="<?php echo $userData['Password']?>">
                </div> -->
                <div class="SubmitArea">
                    <button type="submit" name='editSubmit'>Save</button>
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>

?>