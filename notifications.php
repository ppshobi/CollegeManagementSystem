<?php require_once("/includes/dbconn.php");?>
<?php
 $id=$_GET['id'];
  $sql = "SELECT * FROM notifications WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result); 
      $title=$row['title'];
      $details=$row['details'];
      $creation_date=$row['creation'];
    // Close result set
    mysqli_free_result($result);
    } 
    else{
    echo "Not a valid notification id";
    }
  } else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);
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
  <section class="container notification-page">
      <section class="row">
        <h2><?php echo $title;?></h2>
        <div class="row line"></div>
      </section>
      <section class="row">
        <p><?php echo $details;?></p>
        <br/>
        <p>Published Date:<?php echo $creation_date;?></p>
      </section>
  </section>
  </div><!--end of template container-->


<?php include_once("includes/footer.php");?>