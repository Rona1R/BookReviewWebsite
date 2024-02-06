<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="CSS/dashboard.css" />
    <link rel="stylesheet" href="CSS/BookReviewHomePage.css" />
  </head>

  <body class="dashboardBody">
    <header>
      <?php include('Navigation.php');
          if(isset($_SESSION['username']) && $_SESSION['logged_in'] == true) {
            if ($_SESSION['role'] != 'admin')
            {
              header('Location : BookReviewHomePage.php');
            }      
          }
      ?>

    </header>
    <main class="dashboard">

      <div class="scrollTable">
      <div class="TableContainer">
        <table border="1">
          <tr>
           <th colspan="7" style="text-align:center">Users</th> 
          </tr>
          <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>ROLE</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>

          <?php
         include_once('CRUD/User.php');
          $user=new User();
          $user->displayUsers();
         ?>

        </table>

        <table border="1">
          <tr>
           <th colspan="7" style="text-align:center">Books</th> 
          </tr>
          <tr>
            <th>IDLIBRI</th>
            <th>GENRE</th>
            <th>SRC</th>
            <th>BOOKTITLE</th>
            <th>AUTORI</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>

          <?php
         include_once('CRUD/Books.php');
          $book=new Books();
          $book->displayBooksDashboard();
         ?>
    
    
        </table>
        <a class='addBook' href='DashboardActions/createBook.php'>Add Book</a>

        <table border="1">
          <tr>
           <th colspan="6" style="text-align:center">Comments</th> 
          </tr>
          <tr>
            <th>IDUser</th>
            <th>Username</th>
            <th>Email</th>
            <th>Libri</th>
            <th>Komenti</th>
            <th>Delete</th>
          </tr>    
          <?php 
          $book = new Books();
          $book->displayCommentsDashboard();
          ?>
        </table>

        <table border="1">
          <tr>
           <th colspan="6" style="text-align:center">Logs</th> 
          </tr>
          <tr>
            <th>IDUser</th>
            <th>Username</th>
            <th>Email</th>
            <th>Changed</th>
            <th>Action</th>
            <th>Date</th>
          </tr>    
          
          <?php
          include_once('CRUD/Logs.php');
          $logs=new Logs();
          $logs->displayLogsDashboard();
          ?>
        </table>
      </div> 
    </div> 
    </main> 
    <?php include_once('Footer.php')?>
  </body>


  <style>
      .addBook{
        height: fit-content;
        padding: 15px;
        justify-content: center;
        margin-bottom: 20px;
        border: none;
        border-radius: 46px;
        color:white;
        font-size:15px;
        font-weight: 600;
        background-color: #ff99cc;
      }
  </style> 
</html>
