<?php include('linkDB.php'); ?>
<?php
 
$result = mysqli_query($linkDB,"SELECT * FROM applicantinfo");
?>
<?php
  if (array_key_exists("id", $_GET)) {
    $id = $_GET['id'];
    $sql = "UPDATE applicantinfo SET veified='true' WHERE id=$id";

if ($linkDB->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $linkDB->error;
}
  }
 ?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>

 <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
 </style>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr> 
    <td>Name</td> 
    <td>Father's Name</td>
    
    <td>Mother's Name</td>
    <td>Birthday</td> 
    <td>phone</td>
    
    <td>Gender </td>

    
    <td>Nationality </td> 
    <td>Email </td> 
    <td>Examination</td>
    <td>GPA</td> 
    <td>Subject</td>
    
 
    <td>is_verified</td>
    <td>action</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
 
    <td><?php echo $row["name"]; ?></td> 
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["mname"]; ?></td>

    <td><?php echo $row["birthday"]; ?></td> 
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>

    <td><?php echo $row["nationality"]; ?></td> 
    <td><?php echo $row["email"]; ?></td> 
    <td><?php echo $row["examination"]; ?></td>
  

    <td><?php echo $row["gpa"]; ?></td> 
    <td><?php echo $row["subject"]; ?></td>
    <td><?php echo $row["veified"]; ?></td> 
    <td><a href="/admissionproject/displaydata.php?id=<?php echo $row["id"]; ?>"> verify</a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>