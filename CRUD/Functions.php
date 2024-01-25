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

    // funksioni me i bo insert te dhenat e librit te ri ne databaze:
    public function insertBook($genre,$src,$title,$AuthorName,$AuthorLastName){

        $sqlBook = "insert into librat (Genre,Src,BookTitle) values(?,?,?)";
        $statementBook = $this->conn->prepare($sqlBook);
        $statementBook->execute([$genre,$src,$title]);
        $insertedBookId = $this->conn->insert_id; # insert_id ->atribut i gatshem per me marr id e librit qe posa eshte shtu

        $sqlAuthor = "insert into autori (Emri,Mbiemri) values(?,?)";
        $statementAuthor = $this->conn->prepare($sqlAuthor);
        $statementAuthor->execute([$AuthorName,$AuthorLastName]);
        $insertedAuthorId = $this->conn->insert_id;

        # me insertu id e atij Libri dhe autorin e tij ne tabelen AutoriLibri
        $sqlBookAuthor = "insert into autorilibri(IDAutori,IDLibri) values(?,?)";
        $statementBookAuthor = $this->conn->prepare($sqlBookAuthor);
        $statementBookAuthor->execute([$insertedAuthorId,$insertedBookId]);

    }
}
?>