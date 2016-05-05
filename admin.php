<?php
session_start();
include_once "functions.php";
isloggedin();
$userlevel=$_SESSION['userlevel'];
$username=$_SESSION['username'];
if ($userlevel!=1) {
  header("location:teacher.php");
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
<div class="container">
<a href="logout.php">Logout</a>
<section class="Facilities">
	<ul class="notifications">
      <li><a href="addnotif.php">Create Notification</a></li>
      <li><a href="viewnotif.php">View/Update/Delete Notification</a></li>      
	</ul><!--end of notification-->
  <ul class="students">
      <li><a href="addstud.php">Add student</a></li>
      <li><a href="viewstudent.php">View/Update/Delete Student</a></li>      
  </ul><!--end of students-->
   <ul class="teachers">
      <li><a href="addteacher.php">Add Teacher</a></li>
      <li><a href="viewteacher.php">View/Delete Teacher</a></li>      
  </ul><!--end of students-->
</section>
</div><!--end of page container -->
<?php include_once("includes/footer.php");?>