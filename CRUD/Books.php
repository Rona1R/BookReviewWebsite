<?php 
include_once('dbConnect.php');
include_once('Functions.php');
class Books extends DbConnect{
    private $conn;

    public function __construct(){
        $this ->conn = parent::connectDB(); 
    }

    public function getAllBooks(){
        $func = new Functions();
        return $func->getAllData('librat');
    }

    // metoda qe kthen te dhenat e Autorit qe ka shkru nje liber specifik (dmth si parameter)
    public function getAuthor($bookTitle){
        // autorilibri -> shume me shume (tabela autori dhe tabela libri)
        $autori = null;
        $sql = "SELECT * FROM autori a 
        inner join autorilibri l on a.IDAutori = l.IDAutori
        inner join  librat b on l.IDLibri = b.IDLibri
        where  b.BookTitle = '$bookTitle'
        ";
        $queryExecuted = $this->conn->query($sql);
        if($queryExecuted){
            $authorData = mysqli_fetch_assoc($queryExecuted);
            if($authorData){
                $autori = $authorData;
            }
            
        }
        return $autori;

    }

}

?>