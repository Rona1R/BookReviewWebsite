<?php 
include_once('dbConnect.php');
include_once('Functions.php');

#include_once('handleUserSession.php');
class Logs extends DbConnect{
    private $conn;

    public function __construct(){
        $this ->conn = parent::connectDB(); 
    }

    

    public function displayLogsDashboard(){

        $func= new Functions();
        $logsData= $func->getAllData('logs');
        $u = new User();
        
        if($logsData!=null){
        foreach($logsData as $log){
            $userData = $u->getUsersById($log['AdminID']);
            echo "<tr>
            <td>{$log['AdminID']}</td>
            <td>{$userData['Username']}</td>
            <td>{$userData['Email']}</td>";
            
        
            if ($log['UserID'] !== null) {
                echo "<td>UserID: {$log['UserID']}</td>";
            }
            
            if ($log['IDLibri'] !== null) {
                echo "<td>BookID: {$log['IDLibri']}</td>";
            }
            
            if ($log['KomentiID'] !== null) {
                echo "<td>CommentID: {$log['KomentiID']}</td>";
            }
            echo "<td>{$log['Ndryshimi']}</td>";

             echo "<td>{$log['Koha']}</td>
            </tr>";
        }
        }
    }


}