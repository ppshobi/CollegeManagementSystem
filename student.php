<?php
session_start();
require_once("/includes/dbconn.php");
include_once "functions.php";
isloggedin();
?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $id = $_GET['id'];
  $sql = "SELECT * FROM students WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $row = mysqli_fetch_array($result);
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $year=$row['year'];
    $adm_no=$row['adm_no'];
    $phone_no=$row['phone'];
    $email=$row['email'];
    $dob=$row['dob'];
    $parent=$row['parent'];
    $gender=$row['gender'];
    $remark=htmlspecialchars($row['remarks']);
  }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>BCA Project- WMO</title>
  <meta name="description" content="">
  <meta name="author" content="">  
<?php include_once "/includes/css.php";?>
</head>
<body>
<?php include_once("/includes/header.php");?>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
  <a href="viewstudent.php"> <h6>Back to students list</h6></a>
  <h2>Student Details</h2>
  <div class="row">
  <table class="notification-page">
  <tbody>
   <tr><td>Name:</td><td><?php echo $fname . ' ' . $lname;?></td></tr>
   <tr><td> Year:</td><td><?php echo $year;?></td></tr>
   <tr><td>Admission No:</td><td><?php echo $adm_no;?></td></tr>
   <tr><td> Phone No:</td><td><?php echo $phone_no;?></td></tr>
   <tr><td>Email:</td><td><?php echo $email;?></td></tr>
   <tr><td>Date Of Birth:</td><td><?php echo $dob;?></td></tr>
   <tr><td>Parents Name:</td><td><?php echo $parent;?></td></tr>
   <tr><td>Gender:</td><td><?php echo $gender;?></td></tr>
   <tr><td>Remarks:</td><td><?php echo $remark;?></td></tr>
   </tbody>
  </table>
  </div>

  </div><!--end of template container-->


<?php include_once("includes/footer.php");?>