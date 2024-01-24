<?php 
include_once('dbConnect.php');

class Functions extends DbConnect{

    private $conn; 

    public function __construct(){
         $this->conn = parent::connectDB();
   
    }

    public function getAllData($table){ # funksion qe i lexon te gjitha te dhenat qe i kemi ne tabele specifike 
       
        $allData = null;

        $sql = "SELECT * FROM $table";
        $query = $this->conn->query($sql);
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $allData[]= $row;
            }
        }

        return $allData;
    }

    public function deleteUser($id,$table){
        
        $sql="DELETE FROM $table WHERE UserId=?";

        $statement = $this->conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    }
    

}
?>