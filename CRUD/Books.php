<?php 
include_once('dbConnect.php');
include_once('Functions.php');

#include_once('handleUserSession.php');
class Books extends DbConnect{
    private $conn;

    public function __construct(){
        $this ->conn = parent::connectDB(); 
    }

    // public function getAllBooks(){
    //     $func = new Functions();
    //     return $func->getAllData('librat');
    // }

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
    
    public function insertReviews(){ // duhet me ndreq kur tbohet submit komenti me tbo redirect ne faqen paraprake ...
       
        $useri = $_SESSION['username']; # username-i i userit qe e ka lan komentin (merret nga Sessioni)
        # me bo retrieve ID e user-it qe ka lan koment prej databaze:
        $useriID=null;
        $stmt = $this->conn->prepare("SELECT u.UserID FROM Users u WHERE u.Username = ?");
        $stmt->bind_param("s", $useri);

           
        $stmt->execute();

        $stmt->bind_result($useriID);

        $stmt->fetch();

        $stmt->close();
       

        
        if(isset($_POST['shtoReview'])){
            $commentContent = $_POST['komenti'];
            $idBook = $_POST['idBook'];
            $query = "insert into komenti(UserId,IDLibri,content) values($useriID,$idBook,'$commentContent')";
            $this->conn->query($query);

            // echo '<script>location.reload();</script>';
            exit();
        }
        
    
    }
    public function retrieveComment($idBook){ // funksioni me marr nga databaza( read) komentin dhe me bo display ne frontend
        $komentiContent = array();
        $comment = null;
        $stmt = $this->conn->prepare("SELECT k.content FROM komenti k WHERE k.IDLibri = ?");
        $stmt->bind_param("s", $idBook);
        $stmt->execute();
        $stmt->bind_result($comment);
        while ($stmt->fetch()) {
            
            $komentiContent[] = $comment;
        }
    
        return $komentiContent;
    
     }
     public function ReviewBlock($book, $idBook, $titulli){
        $allReviews = $this->retrieveComment($idBook);
    
        echo "<div class='ReviewDisplay' id='$idBook' style='display:none'>
            <p>$titulli</p>
            <button class='closeReview'>Close Reviews</button>
            <form class='leaveReview' id='$idBook'  method='POST'>
                <label for='komenti'>Leave your review:</label>
                <textarea type='text' id='$idBook' name='komenti' rows='3'></textarea>
                <input type='hidden' name='idBook' value='$idBook'>
                <button type='submit' name='shtoReview'>Post Review</button>
            </form>
            <div class='UserReviewContainer' id='UserReviewBlock$idBook'>";
    
        // Loop through each comment and concatenate them inside the HTML
        foreach ($allReviews as $r) {
            echo "<div class='UserReview'>$r</div>";
        }
    
        echo "</div></div>";
    }
    public function displayBooks($byGenre){
        $func = new Functions();
        $booksData = $func->getAllData('librat');
       
              
        foreach($booksData as $book){
            $autori = $this->getAuthor($book['BookTitle']); # kthe autorin e atij libri 
            if($book['Genre'] == $byGenre){
                echo "<div class='book'>";
                  
                 echo "<img src={$book['Src']} alt={$book['BookTitle']} />
                    <h3>{$book['BookTitle']}</h3>
                    <p>Author: {$autori['Emri']} {$autori['Mbiemri']}</p>
                    <button class='showReview'>Click to see reviews</button>";
        
                 echo "</div>";


                //  $this->displayReviews($book,$book['IDLibri'],$book['BookTitle']);
            }
        }
    }

    public function displayReviews($genre){
        $func = new Functions();
        $booksData = $func->getAllData('librat');
        foreach($booksData as $book){
            if($book['Genre'] == $genre){
                $this->ReviewBlock($book,$book['IDLibri'],$book['BookTitle']);
            }
        }
    }

    
    public function getBookById($id){ // (lexon nga Databaza)ti kthen te dhenat e Libri-it me ID Specifike
               
        $bookData = null;

        $sql = "SELECT * FROM librat u where u.IDLibri=$id";
        $query = $this->conn->query($sql);
        if ($query) {
            $bookData=  mysqli_fetch_assoc($query);          
        }

        return $bookData;
    }

    //me i display books ne dashboard

    public function displayBooksDashboard(){

        $func= new Functions();
        $booksData= $func->getAllData('librat');

        foreach($booksData as $book){
 
            echo "<tr>
            <td>{$book['IDLibri']}</td>
            <td>{$book['Genre']}</td>
            <td>{$book['Src']}</td>
            <td>{$book['BookTitle']}</td>
            <td></td>
            <td><a  href='DashboardActions/EditBook.php?id={$book['IDLibri']}'>Edit</a></td>
            <td><a href='DashboardActions/DeleteBook.php?id={$book['IDLibri']}'>Delete</a></td>
            <td>placeholder</td>
            </tr>";


        }
    }



}

?>