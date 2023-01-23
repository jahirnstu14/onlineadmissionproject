<?php include('teacherserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>teachersignup</title>
    <link rel="stylesheet" href="teachersignup.css" />
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
    <center> <h1> Teacher sign up Form </h1> </center>  
    <div class="error"> <?php echo $error ?> </div>
 
 <!--------- To check user regidtration status ------->
<p>
<?php
 if (!isset($_COOKIE["id"]) OR !isset($_SESSION["id"]) ) {
  echo "Please first register to proceed.";
 }
?> 
</p> 
    <form method="POST">  
        <div class="container">   
            <label>Teacher Username : </label>   
            <input type="text" placeholder="Enter Username" name="name" required> 
            <label>Techer E-mail: </label>   <br>
            <input type="email" placeholder="Enter E-mail" name="email" required> <br> 
            <label>Password : </label>   <br>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label>Confirm Password : </label>   
            <input type="password" placeholder="Confirm Password " name="repeatPassword" required> 

            <input type="checkbox" checked="checked"> Remember me <br> 
            <input type="submit" name="signUp" value="Sign Up">   <br>
             
            <button type="button" class="cancelbtn"> Cancel</button>   
              
        </div>   
    </form>     
    

  </body>
</html>
