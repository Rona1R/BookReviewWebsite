<?php 

include_once('dbConnect.php');
class UserSignUp extends DbConnect{

 
    private $conn; 

    public function __construct(){
        // parent::__construct(); 
        $this->conn = parent::connectDB();
    }

    public function addUser(){
        
        if(isset($_POST['signUpSubmit'])){
            $user = $_POST['username']; // Arti123
            $pass = $_POST['password']; // ----
            $emailAddress = $_POST['email'];
            $role = 'user'; // by default :role e ka user
            
            $query = "insert into users(Username,Email,Password,Role) values('$user','$emailAddress','$pass','$role')";
            $countUsernameQuery = "select count(*) from users u where u.username='$user'";
            $countUserEmailsQuery = "select count(*) from users u where u.email='$emailAddress'";
            
            $userFound =  $this->conn->query($countUsernameQuery);
            $emailsFound = $this->conn->query($countUserEmailsQuery);

            $userCount = $userFound->fetch_column();
            $emailCount = $emailsFound->fetch_column();

            if($userCount == 0 && $emailCount==0){
                if($this->conn->query($query)){
                       // return True;
                    header('Location: ../LogInRegister.php');
                    exit;
              }
            }
            else{
                echo '<script>alert("Username or email taken!!")</script>';
                exit;
            
            }
            	
        }
    }

}


// Rona123*?!
?>