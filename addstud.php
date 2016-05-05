<?php
session_start();
include_once "functions.php";
isloggedin();
?>
<?php addstudent(); ?>
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
   <h1>Add New Student</h1>
   <!-- The above form looks like this -->
    <form name="addstud" method="post" action="">
      <label for="name">Name</label>
      <div class="row namearea">
        <div class="six columns"><input type="text" name="fname" placeholder="Enter First Name" width="100%" id="fname" /></div>
        <div class="six columns"><input type="text" name="lname" placeholder="Enter Last Name" id="lname" /></div>
      </div>
      <label for="year">Select Year</label>
      <div class="row">
        I year:<input type="radio" name="year" value="1">
        II year:<input type="radio" name="year" value="2">
        III year:<input type="radio" name="year" value="3">
      </div>
      <label for="details">Enter Other Details</label>
      <div class="row namearea">
          <input class="one-third column" type="number" name="adm_no" placeholder="Enter Admission No" id="adm_no" />
          <input class="one-third column" type="tel" name="phone_no" placeholder="Enter Phone No" id="phone_no" />
          <input class="one-third column" type="email" name="email" placeholder="Enter Email" id="email" />
      </div>
      <div class="row namearea">
          <input class="one-third column" type="date" name="dob" placeholder="Date of Birth" id="dob" />
          <input class="one-third column" type="text" name="parent" placeholder="Parents Name" id="parent" />
      </div>
      <label for="gender">Select Gender</label>
      <div class="row">
       Male: <input type="radio" name="gender" value="male" />
       Female: <input type="radio" name="gender" value="female" />
      </div>
      <label for="remark">Remarks</label>
      <textarea class="u-full-width" placeholder="Enter Remarks if any" name="remarks"></textarea>
      <input class="button-primary" type="submit" value="Add New Student">
    </form>
  </section><!--end of template container-->


<?php include_once("/includes/footer.php"); ?>