<?php
session_start();
include_once "functions.php";
isloggedin();
require_once("/includes/dbconn.php");
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
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $year=$_POST['year'];
    $adm_no=$_POST['adm_no'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $parent=$_POST['parent'];
    $gender=$_POST['gender'];
    $remark=htmlspecialchars($_POST['remarks']);
    require_once("/includes/dbconn.php");

    $sql = "UPDATE students SET firstname = '$fname', lastname = '$lname', dob='$dob', gender='$gender', year = '$year', phone='$phone_no' , parent = '$parent', email = '$email', adm_no = '$adm_no', remarks = '$remark' WHERE id = '$id'";

    if (mysqli_query($conn,$sql)) {
      echo "Student updated successfully";
      echo "<a href=\"viewstudent.php\">";
      echo "Back to Students";
      echo "</a>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
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
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  -->
<?php include_once "/includes/css.php";?>

</head>
<body>
<?php include_once("/includes/header.php");?>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <section class="container student">
   <h1>Update Student Data</h1>
   <!-- The above form looks like this -->
    <form name="addstud" method="post" action="">
      <label for="name">Name</label>
      <div class="row namearea">
        <div class="six columns"><input type="text" name="fname" value="<?php echo $fname; ?>" width="100%" id="fname" /></div>
        <div class="six columns"><input type="text" name="lname" value="<?php echo $lname; ?>" id="lname" /></div>
      </div>
      <label for="year">Select Year</label>
      <div class="row">
        I year:<input type="radio" name="year" value="1" <?php if($year==1){echo "checked";} ?>/>
        II year:<input type="radio" name="year" value="2" <?php if($year==2){echo "checked";} ?>/>
        III year:<input type="radio" name="year" value="3" <?php if($year==3){echo "checked";} ?>/>
      </div>
      <label for="details">Enter Other Details</label>
      <div class="row namearea">
          <input class="one-third column" type="number" name="adm_no" value="<?php echo $adm_no; ?>"  id="adm_no" />
          <input class="one-third column" type="tel" name="phone_no" value="<?php echo $phone_no; ?>" id="phone_no" />
          <input class="one-third column" type="email" name="email" value="<?php echo $email; ?>"  id="email" />
      </div>
      <div class="row namearea">
          <input class="one-third column" type="date" name="dob" value="<?php echo $dob; ?>"  id="dob" />
          <input class="one-third column" type="text" name="parent" value="<?php echo $parent; ?>"  id="parent" />
      </div>
      <label for="gender">Select Gender</label>
      <div class="row">
       Male: <input type="radio" name="gender" value="male" <?php if($gender=='male'){echo "checked";}?> />
       Female: <input type="radio" name="gender" value="female" <?php if($gender=='female'){echo "checked";}; ?>/>
      </div>
      <label for="remark">Remarks</label>
      <textarea class="u-full-width" placeholder="Enter Remarks if any" name="remarks"><?php echo $remark; ?></textarea>
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <input class="button-primary" type="submit" value="Update Student">
    </form>
  </section><!--end of template container-->


<?php include_once("/includes/footer.php"); ?>