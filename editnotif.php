<?php
session_start();
require_once("/includes/dbconn.php");
include_once "functions.php";
isloggedin();
?>
<?php 
 if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $id = $_GET['id'];
  $sql = "SELECT * FROM notifications WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $row = mysqli_fetch_array($result);
    $title=$row['title'];
    $details=$row['details'];
  }
  } 
?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id=$_POST['id'];
  $title=$_POST['title'];
  $details=$_POST['details'];
  $details=htmlspecialchars($details);
  $sql = "UPDATE notifications SET title = '$title', details='$details' WHERE id = '$id'";

  if (mysqli_query($conn,$sql)) {
    echo "Notification Updated successfully";
    echo "<a href=\"viewnotif.php\">" . "Back" . "</a>";
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
<?php include_once "/includes/css.php";?>

</head>
<body>
<?php include_once("/includes/header.php");?>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section class="container">
  <a href="viewnotif.php"><h6>Back to Notification page</h6></a>
   <h1>Update Your <span>Notifications</span></h1>
   <!-- The above form looks like this -->
    <form name="newnotif" method="post" action="">
      <div class="row">
          <label for="title">Title</label>
          <input class="u-full-width" type="text" name="title" id="title" value="<?php echo $title;?>" />
      </div>
      <label for="Details">Details</label>
      <textarea class="u-full-width" id="notifdetails" name="details"><?php echo htmlspecialchars($details);?></textarea>
      <input type="hidden" name="id" value="<?php echo $id;?>" />
      <input class="button-primary" type="submit" value="Update Notification">
    </form>
  </section><!--end of template container-->


<?php include_once("/includes/footer.php"); ?>