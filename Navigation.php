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
      <!-- <?php echo $hide?> -->
      <a id=<?php echo $hide?>><b>Dashboard</b></a>
    </div>
    <div class="NavigationRight">
        <!-- <div class="Bottom">
          <a href="LogInRegister.php" target="_parent"><b>Log In</b></a>
          <a href="SignUp.php" target="_parent"><b>Sign Up</b></a> 
        </div>  -->
     <div class="Top">
        <p id='userDisplay'><?php echo $_SESSION['username'];?></p>
        <a href="logInFunc/logOut.php"><b>Log Out</b></a>
     </div>
    </div>
  </div>

 
<style>

#userDisplay{
    color: #FF327E;
    font-weight: bold;
    padding-right: 10px;
    text-shadow: 1px 2px 3px #dcdcdc;
}

#adminDashboard{
  padding-left: 8px;
  display: none;
}



</style>
