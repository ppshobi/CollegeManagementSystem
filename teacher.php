<?php
session_start();
include_once "functions.php";
isloggedin();

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
  <ul class="students">
      <li><a href="addstud.php">Add student</a></li>
      <li><a href="viewstudent.php">View/Update/Delete Student</a></li>      
  </ul><!--end of students-->
  <ul class="internalmark">
      <li><a href="internalmark.php">Apply Internal Mark</a></li>
      <li><a href="yearwisemark.php">Year Wise Report</a></li>
  </ul><!--end of students-->
</section>
</div><!--end of page container -->
<?php include_once("includes/footer.php");?>