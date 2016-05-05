<?php
session_start();
include_once "functions.php";
// isloggedin();
?>
<?php addteacher(); ?>
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
  <section class="container student">
   <h1>Add New Teacher</h1>
   <!-- The above form looks like this -->
    <form name="addteacher" method="post" action="">
      <label for="username">Enter Username</label>
      <div class="row namearea">
        <div class="one-third column"><input type="text" name="uname" placeholder="Enter user Name" width="100%" id="fname" /></div>
      </div>
      <label for="details">Enter Password</label>
      <div class="row namearea">
          <input class="one-third column" type="password" name="password" placeholder="Enter Password" id="password" />
      </div>
      
      <input class="button-primary" type="submit" value="Add New Teacher">
    </form>
  </section><!--end of template container-->


<?php include_once("/includes/footer.php"); ?>