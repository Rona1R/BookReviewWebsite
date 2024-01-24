<?php 
    include_once('Functions.php');
    include_once('dbConnect.php');

class User extends DbConnect{

    private $conn;
    private $modifiedBy = 'placeholder';
    public function __construct(){
         $this ->conn =parent::connectDB();
    }


    public function displayUsers(){

        $func= new Functions();
        $usersData= $func->getAllData('users');

        foreach($usersData as $user){
 
            echo "<tr>
            <td>{$user['UserId']}</td>
            <td>{$user['Email']}</td>
            <td>{$user['Username']}</td>
            <td>{$user['Password']}</td>
            <td>{$user['Role']}</td>
            <td><a  href='DashboardActions/Edit.php?id={$user['UserId']}'>Edit</a></td>
            <td><a href='DashboardActions/Delete.php?id={$user['UserId']}'>Delete</a></td>
            <td>{$this->modifiedBy}</td>
            </tr>";


        }
    }

    public function getUsersById($id){ // (lexon nga Databaza)ti kthen te dhenat e User-it me ID Specifike
               
        $userData = null;

        $sql = "SELECT * FROM users u where u.UserId=$id";
        $query = $this->conn->query($sql);
        if ($query) {
            $userData=  mysqli_fetch_assoc($query);          
        }

        return $userData;
    }
    
    public function userExists($user){
        $sql = $this->conn->prepare("SELECT COUNT(*) as count FROM users WHERE users.Username = ?");
        $sql->bind_param("s", $user);
        
        $sql->execute();
        $result = $sql->get_result();

        $rezColumn = $result->fetch_assoc();
        $count = $rezColumn['count'];     
        
        if($count > 0){
            return true;
        }
        return false;

    }

    public function emailExists($userEmail){
        $sql = $this->conn->prepare("SELECT COUNT(*) as count FROM users WHERE users.Email = ?");
        $sql->bind_param("s", $userEmail);
        
        $sql->execute();
        $result = $sql->get_result();

        $rezColumn = $result->fetch_assoc();
        $count = $rezColumn['count'];     
        
        if($count > 0){
            return true;
        }
        return false;

    }
}


?>