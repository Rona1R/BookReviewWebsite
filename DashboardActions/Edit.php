<?php 
 include_once('../logInFunc/handleUserSession.php');
//  echo $_SESSION['username'];
include_once('../CRUD/Functions.php');
include_once('../CRUD/User.php');
$errorMessage ="";
$userId=$_GET['id'];
// echo $userId;

$userObj = new User();
$userData = $userObj->getUsersById($userId);
// print_r($userData);

if(isset($_POST['editSubmit'])){
    $user = $_POST['usernameEdit']; 
    $pass = $_POST['passwordEdit']; 
    $role = $_POST['userRole'];
    $emailAddress = $_POST['emailEdit'];


    // me bo check nese username dhe passwordi jane modifiku,mos me qene username dhe email i ri i njejt me ndonje ekzistues ne db
    // me kqyr a jane modifiku i krahasojme me ato qe na vine tek UsersData
    if($user != $userData['Username']){ // is modified
        if($userObj->userExists($user)){
            $errorMessage = "Username is taken";
        }
    }

    if($emailAddress != $userData['Email']){ // is modified
        if($userObj->emailExists($emailAddress)){
            $errorMessage = "Email is taken";
        }
    }


    if(empty($errorMessage)){ // nese error Message eshte empty atehere bej ndryshimet dhe redirect ne Dashboard
        $f = new Functions();
        $f->editUser($userId,$user,$emailAddress,$role,$pass);
        header('Location: ../Dashboard.php');
        exit;
    }
        
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
                    <label for="usernameEdit" class="SignInLabel">Username:</label>
                    <input type="text" id="usernameEdit" name="usernameEdit" value="<?php echo $userData['Username']?>">
                </div>

                <div class="SignInInfo" id="emailBox">
                    <label for="emailEdit" class="SignInLabel">Email:</label>
                    <input type="text" id="emailEdit" name="emailEdit" value="<?php echo $userData['Email']?>">
                </div>

                <div class="SignInInfo" id="roleBox">
                    <label for="userRole" class="SignInLabel">Role:</label>
                    <input type="text" id="userRole" name="userRole" value="<?php echo $userData['Role']?>">
                </div>

                <div class="SignInInfo">
                    <label for="passwordEdit" class="SignInLabel">Password:</label>
                    <input type="text" id="passwordEdit" name="passwordEdit" value="<?php echo $userData['Password']?>">
                </div>
                <div class="SubmitArea">
                    <button type="submit" name='editSubmit'>Save</button>
                    <p style='color:red'><?php echo $errorMessage?></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>