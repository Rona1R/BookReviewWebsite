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
      <?php include('Navigation.php')?>
    </header>
    <main class="dashboard">

      <div class="scrollTable">
      <div class="TableContainer">
        <table border="1">
          <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>ROLE</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Modified by:</th>
          </tr>

          <?php
         include_once('CRUD/User.php');
          $user=new User();
          $user->displayUsers();
         ?>

        </table>

        <table border="1">
          <tr>
            <th>IDLIBRI</th>
            <th>GENRE</th>
            <th>SRC</th>
            <th>BOOKTITLE</th>
            <th>AUTORI</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Modified by</th>
          </tr>

          <?php
         include_once('CRUD/Books.php');
          $book=new Books();
          $book->displayBooksDashboard();
         ?>

          <!-- <tr>
            <td>1</td>
            <td>john@example.com</td>
            <td>john_doe</td>
            <td>password123</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>

           <tr>
            <td>2</td>
            <td>jane@example.com</td>
            <td>jane_smith</td>
            <td>password456</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr> -->
        </table>
      </div> 
    </div> 
    </main> 
    <?php include_once('Footer.php')?>
  </body>
</html>
