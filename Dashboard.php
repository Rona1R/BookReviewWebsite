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
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>

          <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john_doe</td>
            <td>password123</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john_doe</td>
            <td>password123</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john_doe</td>
            <td>password123</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john_doe</td>
            <td>password123</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john_doe</td>
            <td>password123</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john_doe</td>
            <td>password123</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>

          <tr>
            <td>2</td>
            <td>Jane</td>
            <td>Smith</td>
            <td>jane@example.com</td>
            <td>jane_smith</td>
            <td>password456</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>
        </table>

        <table border="1">
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>

          <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john_doe</td>
            <td>password123</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>

           <tr>
            <td>2</td>
            <td>Jane</td>
            <td>Smith</td>
            <td>jane@example.com</td>
            <td>jane_smith</td>
            <td>password456</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>
        </table>
      </div> 
    </div> 
    </main> 
    <?php include_once('Footer.php')?>
  </body>
</html>
