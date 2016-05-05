<?php
session_start();
include_once "functions.php";
isloggedin();
?>
<?php require_once("/includes/dbconn.php");?>
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
  <a href="admin.php"><h6>Back to admin page</h6></a>
  <section class="container notification-page">
  <table class="u-full-width">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Creation Date</th>
          <th colspan="2">Options</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $sql = "SELECT * FROM notifications";
                if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){  
                        $id=$row['id']; 
                        $title=$row['title']; 
                        $creation_date=$row['creation'];                     
                         echo "<tr>";
                         echo "<td>".$id."</td>";
                         echo "<td>".$title."</td>"; 
                         echo "<td>".$creation_date."</td>"; 
                         echo "<td><a href=\"editnotif.php?id=$id\">" . "Edit" . "</a></td>";
                         echo "<td><a href=\"deletenotif.php?id=$id\">" . "Delete" . "</a></td>";
                         echo "</tr>";                        
                    }
                    echo "</tbody></table>";
                 // Close result set
                    mysqli_free_result($result);
                  } else{
                 echo "No New Notifications";
                    }
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
          
                // Close connection
               mysqli_close($conn);
?>  
  </section>
  </div><!--end of template container-->


<?php include_once("includes/footer.php");?>