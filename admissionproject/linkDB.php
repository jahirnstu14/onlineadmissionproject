<?php
// Open a new connection to the MySQL server
$linkDB = mysqli_connect("localhost","root","","shanto");  
  if (mysqli_connect_error()){ //for connection error finding
  die ('There was an error while connecting to database');
  }else{
    echo "connected";
  }
?>