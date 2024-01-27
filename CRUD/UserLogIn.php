<?php

include_once('dbConnect.php');
// include_once('Functions.php');
include_once('User.php');

class UserLogIn extends DbConnect{ 

    private $conn; 

    public function __construct(){
         $this->conn = parent::connectDB();
    }

    public function logIn(){

        if(isset($_POST['loginSubmit'])){

            $user=$_POST['username'];
            $pass=$_POST['password'];
            $emailAddress=$_POST['email'];
            
           

            $userObj = new User();
      
            if ($userObj->userExists($user) && $userObj->emailExists($emailAddress)){ // kredencialet valide a jane
                $userID = $userObj->getUserIdByUsername($user);
                $userDetails = $userObj->getUsersById($userID);
                if($pass == $userDetails['Password']){ // nese Useri ekziston bone check a ka shkru password-in mire
                    session_start();

                    $_SESSION['username'] = $user;
                    $_SESSION['password'] = $pass;
                    $_SESSION['email'] = $emailAddress;
               
                    $_SESSION['role'] = $userDetails['Role'];
                    $_SESSION['logged_in'] = true;
                    header("Location:BookReviewHomePage.php");
                    exit();
                }
            }
            echo "<script>alert('Your credentials are wrong!Try again')</script>";
            exit();

            // }
            // foreach($usersAll as $userInDB){
            //     if ($user == $userInDB['Username'] && $pass == $userInDB['Password']
            //     && $emailAddress == $userInDB['Email'] // dmth me i bo check krejt kredencialet a jon sakte para se me bo attempt me fillu session me to
            //     ){
            //        session_start();

            //        $_SESSION['username'] = $user;
            //        $_SESSION['password'] = $pass;
            //        $_SESSION['email'] = $emailAddress;
            //        $_SESSION['role'] = $userInDB['Role'];
            //        $_SESSION['logged_in'] = true;
            //        header("Location:BookReviewHomePage.php");
            //        exit();
            //     }

            // }
        }

    }

}


//Rona1234!?*

?>