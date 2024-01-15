<?php 
include_once("logInFunc/handleUserSession.php");
?>


  <div class="Navigation">
    <div class="NavigationLeft">
      <img alt="LOGO" src="FOTOT/7naIo6-LogoMakr.png" />
      <a href="BookReviewHomePage.php"><b>Home</b></a>
      <a href="#end"><b>Contact us</b></a>
      <a href="#Description"><b>About us</b></a>
      <div class="DropDown">
        <button class="dropButton"><b>Genres</b></button>
        <div class="dropdown-content">
          <a href="Fantasy.php">Fantasy</a>
          <a href="Romance.php">Romance</a>
          <!-- <a href="#">Genre 3</a> -->
        </div>
      </div>
    </div>
    <div class="NavigationRight">
      <div class="Top">
        <a href="LogInRegister.php" target="_parent"><b>Log In</b></a>
      <!--target per me mujt mu kthy mrapa ne homepage me shigjete-->
         <a href="SignUp.php" target="_parent"><b>Sign Up</b></a>
     </div>
     <div class="Bottom">
        <p><?php echo $_SESSION['username'];?></p>
     </div>
    </div>
  </div>

 

