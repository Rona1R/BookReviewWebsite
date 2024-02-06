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
    <title>Sign Up FORM</title>
    <link rel="stylesheet" href="CSS/LogInRegister.css">
    <script src="JS/FormaValidimi.js"></script>
</head>

<body>
    <div class="LogInBox">
        <div class="SignIn">
            <div class="SignInTop">
                <img alt="LOGO" src="FOTOT/7naIo6-LogoMakr.png">
                <p>Sign up to BookHub</p>
            </div>
            <form  id='signUpForm' method="POST">
                <div class="SignInInfo" id="EmailBox">
                    <label for="email1" class="SignInLabel">Email:</label>
                    <input type="text" id="email1" name="email" placeholder="example@gmail.com">
                </div>

                <div class="SignInInfo" id="UsernameBox">
                    <label for="usernameID2" class="SignInLabel">Username:</label>
                    <input type="text" id="usernameID2" name="username">
                </div>

                <div class="SignInInfo" id="PasswordBox">
                    <label for="password1" class="SignInLabel">Password:</label>
                    <input type="password" id="password1" name="password">
                </div>

                <div class="SignInInfo">
                    <label for="confirm" class="SignInLabel">Confirm:</label>
                    <input type="password" id="confirm" name="password">
                </div>
                <div class="SubmitArea">
                    <button type="submit" onclick="return validate2()" name='signUpSubmit'>Sign up</button>
                </div>
            </form>
        </div>
        <div class="SignUp">
            <p>Already have an account? <a href="LogInRegister.php">Log in</a></p>
        </div>
        <?php

        include_once('CRUD/UserSignUp.php');

        $newUser = new UserSignUp();

        $newUser->addUser();

        ?>
    </div>
</body>


</html>