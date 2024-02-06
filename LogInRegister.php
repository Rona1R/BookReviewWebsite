<?php 
 session_start();
 if (isset($_SESSION['username']) && $_SESSION['logged_in'] == true) {
   header('Location:BookReviewHomePage.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn or Sign Up FORM</title>
    <link rel="stylesheet" href="CSS/LogInRegister.css">
    <script src="JS/FormaValidimi.js"></script>
</head>
<body>
        <div class="LogInBox">
            <div class="SignIn">
                <div class="SignInTop">
                    <img alt="LOGO" src="FOTOT/7naIo6-LogoMakr.png">
                    <p>Sign in to BookHub</p>
                </div> 
                <form  id='logInForm' method='POST'>
                    <div  class="SignInInfo" id="EmailBox">  
                        <label for="email" class="SignInLabel">Email:</label>
                        <input type="text" id="email" name="email" placeholder="example@gmail.com">
                    </div>

                    <div  class="SignInInfo" id="UsernameBox">  
                        <label for="usernameID" class="SignInLabel">Username:</label>
                        <input type="text" id="usernameID" name="username">
                    </div>
                    
                    <div class="SignInInfo" id="PasswordBox">
                        <label for="password" class="SignInLabel">Password:</label>
                        <input type="password" id="password" name="password">
                    </div>
                        
                    <div class="SubmitArea"> 
                        <button type="submit" onclick="return validate()" name="loginSubmit">Sign in</button>
                    </div>
                </form>
            </div>
            <div class="SignUp">
                <p>New to BookHub? <a href="SignUp.php" >Create an account</a></p>
            </div>
        </div>
</body>

<?php 
include_once('CRUD/UserLogIn.php');
$logUser = new UserLogIn();

$logUser->logIn();
?>


</html>