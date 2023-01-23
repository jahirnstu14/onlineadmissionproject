<?php include('teacherserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacherlogin</title>
    <link rel="stylesheet" href="teacherlogin.css" />
  </head>
  <body>
    <div class="navbar background">
      <ul class="nav-list">
        
      <li><a href="index.html" target="_self">Home</a></li>
        <li><a href="teacherlogin.php">Log In</a></li>
        <li><a href="teachersignup.php">Sign Up</a></li>
        <li><a href="onlineadmission.php">Online Admission</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>

      
    </div> 
    <center> <h1> Teacher Login Form </h1> </center>   
    <form method="POST">
    <div class="error"> <?php echo $error2 ?> </div>
 
 <!-- To check the user loged In status -->
 <p>
  <?php
     if (!isset($_COOKIE["id"]) OR !isset($_SESSION["id"]) ) {
      echo "<p>Please first log in to proceed.</p>";
     }
  ?>
</p>  
        <div class="container">   
            <label>Teacher Username / E-mail : </label>   
            <input type="email" placeholder="Enter Username" name="email" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required> 
            <input type="checkbox" checked="checked"> Remember me <br> 
            <input type="submit" name="logIn" value="Log In">
             
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>   
        </div>   
    </form>     
    

  </body>
</html>
