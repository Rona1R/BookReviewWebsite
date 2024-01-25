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

    public function editUser($id,$username,$email,$role,$password){

        $sql="UPDATE users SET username=?, email=? ,role=?,password=? WHERE UserId=?";

        $statement= $this->conn->prepare($sql);

        $statement->execute([$username,$email,$role,$password,$id]);

        // echo "<script>alert('update was successful'); </script>";
    }

    public function deleteBook($id,$table){
        
        $sql="DELETE FROM $table WHERE IDLibri=?";

        $statement = $this->conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    }

    public function editBook($IDLibri,$Genre,$Src,$BookTitle){

        $sql="UPDATE librat SET Genre=?, Src=?,BookTitle=? WHERE IDLibri=?";

        $statement= $this->conn->prepare($sql);

        $statement->execute([$Genre,$Src,$BookTitle,$IDLibri]);

        // echo "<script>alert('update was successful'); </script>";
    }

    public function editAuthor($id,$emri,$mbiemri){
        
        $sql="UPDATE autori SET Emri=?, Mbiemri=? WHERE IDAutori=?";

        $statement= $this->conn->prepare($sql);

        $statement->execute([$emri,$mbiemri,$id]);

    }

    

}
?>