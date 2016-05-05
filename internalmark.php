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
 <a href="teacher.php"><h6>Back to teacher page</h6></a>
  <section class="container student-page">
  <div class="first_year">
  <label for="first_year"><h5>First Year</h5></label>
  <table class="u-full-width">
      <thead>
        <tr>
          <th>Ad:No</th>
          <th>Name</th>
         
          <th colspan="2">Options</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $sql = "SELECT * FROM students WHERE year=1 ORDER BY adm_no ASC";
                if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){ 
                        $id=$row['id']; 
                        $adm_no=$row['adm_no']; 
                        $name=$row['firstname'] . $row['lastname'];                     
                         echo "<tr>";
                         echo "<td>".$adm_no."</td>";
                         echo "<td>". "<a href=\"student.php?id=$id\">" . $name."</a></td>"; 
                         echo "<td><a href=\"addmark.php?id=$id\">" . "Add Mark" . "</a></td>";
                         echo "<td><a href=\"viewmark.php?id=$id\">" . "View Marks" . "</a></td>";
                         echo "</tr>";                        
                    }
                    echo "</tbody></table>";
                 // Close result set
                    mysqli_free_result($result);
                  } else{
                 echo "No Students ";
                    }
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
?>  
  </div><!--end of first year-->
   <div class="second_year">
  <label for="second_year"><h5>Second Year</h5></label>
  <table class="u-full-width">
      <thead>
        <tr>
          <th>Ad:No</th>
          <th>Name</th>
          <th colspan="2">Options</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $sql = "SELECT * FROM students WHERE year=2 ORDER BY adm_no ASC";
                if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){ 
                        $id=$row['id']; 
                        $adm_no=$row['adm_no']; 
                        $name=$row['firstname'] . ' ' .$row['lastname'];
                                          
                         echo "<tr>";
                         echo "<td>".$adm_no."</td>";
                         echo "<td>". "<a href=\"student.php?id=$id\">" . $name."</a></td>"; 
                         echo "<td><a href=\"addmark.php?id=$id\">" . "Add Mark" . "</a></td>";
                         echo "<td><a href=\"viewmark.php?id=$id\">" . "View Marks" . "</a></td>";
                         echo "</tr>";                        
                    }
                    echo "</tbody></table>";
                 // Close result set
                    mysqli_free_result($result);
                  } else{
                 echo "No Students ";
                    }
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
?>  
  </div><!--end of second year-->

    <div class="third_year">
  <label for="third_year"><h5>Third Year</h5></label>
  <table class="u-full-width">
      <thead>
        <tr>
          <th>Ad:No</th>
          <th>Name</th>
          <th colspan="2">Options</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $sql = "SELECT * FROM students WHERE year=3 ORDER BY adm_no ASC";
                if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){ 
                        $id=$row['id']; 
                        $adm_no=$row['adm_no']; 
                        $name=$row['firstname'] . ' ' .$row['lastname'];
                                           
                         echo "<tr>";
                         echo "<td>".$adm_no."</td>";
                         echo "<td>". "<a href=\"student.php?id=$id\">" . $name."</a></td>"; 
                         echo "<td><a href=\"addmark.php?id=$id\">" . "Add Mark" . "</a></td>";
                         echo "<td><a href=\"viewmark.php?id=$id\">" . "View Marks" . "</a></td>";
                         echo "</tr>";                        
                    }
                    echo "</tbody></table>";
                 // Close result set
                    mysqli_free_result($result);
                  } else{
                 echo "No Students ";
                    }
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
                //connection close
                mysqli_close($conn);
?>  
  </div><!--end of third year-->

</section>
</div><!--end of template container-->


<?php include_once("includes/footer.php");?>