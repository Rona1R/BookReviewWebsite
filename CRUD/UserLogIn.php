<?php

include_once('dbConnect.php');
class UserLogIn extends DbConnect{

    private $conn; 

    public function __construct(){
        // parent::__construct(); 
        $this->conn = parent::connectDB();
    }
      
    public function getAllUsers($table){

        $usersData = null;

        $getUsers = "SELECT * FROM $table";
        $getUsersQuery = $this->conn->query($getUsers);
        if ($getUsersQuery) {
            while ($row = mysqli_fetch_assoc($getUsersQuery)) {
                $usersData[]= $row;
            }
        }

        return $usersData;
    } 

    public function logIn(){

        if(isset($_POST['loginSubmit'])){

            $user=$_POST['username'];
            $pass=$_POST['password'];
            $emailAddress=$_POST['email'];
            
            $usersAll = $this->getAllUsers('users');

            foreach($usersAll as $userInDB){
                if ($user == $userInDB['Username'] && $pass == $userInDB['Password']
                && $emailAddress == $userInDB['Email'] // dmth me i bo check krejt kredencialet a jon sakte para se me bo attempt me fillu session me to
                ){
                   session_start();
                   $_SESSION['username'] = $user;
                   $_SESSION['password'] = $pass;
                   $_SESSION['email'] = $emailAddress;
                   $_SESSION['role'] = $userInDB['Role'];
                   header("Location:BookReviewHomePage.php");
                   exit();
                }

            }
            echo "<script>alert('Your credentials are wrong!Try again')</script>";
            exit();
        }

    }

}


//Rona1234!?*

?>