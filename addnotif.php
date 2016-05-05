<?php
session_start();
include_once "functions.php";
isloggedin();
?>
<?php addnotification(); ?>
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
  <a href="admin.php"><h6>Back to admin page</h6></a>
   <h1>Create Your <span>Notifications</span></h1>
   <!-- The above form looks like this -->
    <form name="newnotif" method="post" action="">
      <div class="row">
          <label for="title">Title</label>
          <input class="u-full-width" type="text" name="title" placeholder="Enter Title" id="title" />
      </div>
      <label for="Details">Details</label>
      <textarea class="u-full-width" placeholder="Notification Details" id="notifdetails" name="details"></textarea>
      <input class="button-primary" type="submit" value="Create Notification">
    </form>
  </section><!--end of template container-->


<?php include_once("/includes/footer.php"); ?>