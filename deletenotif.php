<?php
session_start();
include_once "functions.php";
isloggedin();
require_once("/includes/dbconn.php");
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $id = $_GET['id'];
  $sql = "DELETE FROM notifications WHERE id=$id";
  $result = mysqli_query($conn, $sql);
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
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  -->
<?php include_once "/includes/css.php";?>

</head>
<body>
<?php include_once("/includes/header.php");?>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section class="container">
   <?php
      if ($result) {
      echo "Notification Deleted Successfully";
      echo "<br/>";
      echo "<a href=\"viewnotif.php\">" . "Back" . "</a>";
    }
   ?>
  </section><!--end of template container-->


<?php include_once("/includes/footer.php"); ?>