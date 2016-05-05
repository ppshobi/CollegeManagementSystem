<?php
session_start();
require_once("/includes/dbconn.php");
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
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
 <a href="admin.php"><h6>Back to admin page</h6></a>
  <section class="container student-page">
  <div class="first_year">
  <label for="first_year"><h5>First Year</h5></label>
  <table class="u-full-width">
      <thead>
        <tr>
          <th>username</th>
          <th colspan="1">Options</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $sql = "SELECT * FROM users WHERE userlevel=2";
                if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){ 
                        $id=$row['id']; 
                        $username=$row['username'];                    
                         echo "<tr>";
                         echo "<td>".$username."</td>"; 
                         echo "<td><a href=\"deleteteacher.php?id=$id\">" . "Delete" . "</a></td>";
                         echo "</tr>";                        
                    }
                    echo "</tbody></table>";
                 // Close result set
                    mysqli_free_result($result);
                  } else{
                 echo "No Teacher ";
                    }
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
?>  
  </div><!--end of teacher-->
  

</section>
</div><!--end of template container-->


<?php include_once("includes/footer.php");?>