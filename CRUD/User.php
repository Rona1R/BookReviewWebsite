<?php 
    include_once('Functions.php');
    include_once('dbConnect.php');

    class User extends DbConnect{

    private $conn;

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
            <td><a>Edit</a></td>
            <td><a href='DashboardActions/Delete.php?id={$user['UserId']}'>Delete</a></td>
            </tr>";


        }





    }


    

    


    }


?>