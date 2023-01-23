<?php 
session_start();
//------ PHP code for User registration form---
$error = "";
$success  = "";
if (array_key_exists("submit", $_POST)) {
 
     // Database Link
    include('linkDB.php');  
 
    //Taking HTML Form Data from User 
    $name = mysqli_real_escape_string($linkDB, $_POST['name']);
    $fname = mysqli_real_escape_string($linkDB, $_POST['fname']);
    $mname = mysqli_real_escape_string($linkDB, $_POST['mname']);
    $birthday = mysqli_real_escape_string($linkDB, $_POST['birthday']);
    $phone = mysqli_real_escape_string($linkDB, $_POST['phone']);
    $gender = mysqli_real_escape_string($linkDB,  $_POST['gender']); 

    $nationality = mysqli_real_escape_string($linkDB,  $_POST['nationality']);
    $email = mysqli_real_escape_string($linkDB, $_POST['email']); 
  
 
    $examination = mysqli_real_escape_string($linkDB, $_POST['examination']);
    $gpa = mysqli_real_escape_string($linkDB,  $_POST['gpa']); 
    $subject = mysqli_real_escape_string($linkDB,  $_POST['subject']); 

   
    // PHP form validation PHP code
    if (!$name) {
      $error .= "Name is required <br>";
     }
    if (!$fname) {
        $error .= "father name is required <br>";
    }
    if (!$mname) {
        $error .= "mother name is required <br>";
    }
    if (!$birthday) {
        $error .= "birthday is required <br>";
     }
    if (!$phone) {
        $error .= "phone number is required <br>";
     } 
     if (!$gender) {
        $error .= "gender is required<br>";
     }
     if (!$nationality) {
        $error .= "nationality is required<br>";
     }
     if (!$email) {
        $error .= "email is required<br>";
     }
     if (!$examination) {
        $error .= "examination is required<br>";
     }
     if (!$gpa) {
        $error .= "gpa is required<br>";
     }
     if (!$subject) {
        $error .= "subject is required<br>";
     }
     if ($error) {
        $error = "<b>There were error(s) in your form!</b> <br>".$error;
     }  else {
 
 
     
            $query = "INSERT INTO  `applicantinfo`( `name`, `email`, `fname`, `mname`, `birthday`, `phone`, `gender`, `nationality`, `subject`, `examination`, `gpa` ,`veified` ) 
             VALUES ('$name', '$email', '$fname','$mname', '$birthday','$phone', '$gender',  '$nationality', '$subject', '$examination', '$gpa', 'false' )";
             
            if (!mysqli_query($linkDB, $query)){
              echo mysqli_error($linkDB);
                $error ="<p>Could not submit - please try again.</p>";
                } else {
  
                  $success .= "applied successfully";
             
                }
 
 
        }  
    }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Admission</title>
    <link rel="stylesheet" href="onlineadmission.css" />
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
    <center><h1>Application For Admission</h1></center>
    <div class="error"> <?php echo $error ?> </div>
    <div class="success"> <?php echo $success ?> </div>
    <form class="form" method="post">
      <label for="fname">Application's Name:</label>
      <input type="text" id="fname" name="name" value="" /><br />


      <label for="lname">Father's Name:</label>
      <input type="text" id="lname" name="fname" value="" />

      <label for="lname">Mother's Name:</label>
      <input type="text" id="lname" name="mname" value="" />
      <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday" />

      <label for="lname">Mobile Number:</label>
      <input type="text" id="lname" name="phone" value="" />
      <label for="lname">Gender :</label>
      <br />
      <select name="gender" id="gender">
        <option value="">select one</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="common">Common</option></select
      ><br />
     
      <label for="lname">Nationality :</label>
      <br />
      <select name="nationality" id="nationality">
        <option value="">select one</option>
        <option value="Bnalgadeshi">Bangladeshi</option>
        <option value="Foreigner">Foreigner</option></select
      ><br />
      
 
      <label for="lname">Email:</label>
      <input type="email" id="lname" name="email" value="" />
       

      <hr />
 
      <label for="lname">Examination :</label>
      <br />
      <select name="examination" id="Examination">
        <option value="">select one</option>
        <option value="HSC">HSC</option>
        <option value="bsc">BSC</option>
        <option value="Others">Others</option></select
      ><br />
      <label for="lname">Result GPA : </label>
      <input type="text" id="lname" name="gpa" value="" />
      <label for="lname">Subject :</label>
      <br />
      <select name="subject" id="subject">
        <option value="">select one</option>
        <option value="CSTE">CSTE</option>
        <option value="ICE">ICE</option>
        <option value="eee">EEE</option>
        <option value="SE">SE</option>
        <option value="ACCE">ACCE</option></select
      ><br />
      

      <input type="submit" name="submit" value="Apply"> 
    </form>
  </body>
</html>
