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
    <h2>Generate Report</h2>
    <hr/>
    <div class="row">
    <form name="generate report" method="post" action="">
        I year:<input type="radio" name="year" value="1">
        II year:<input type="radio" name="year" value="2">
        III year:<input type="radio" name="year" value="3">
    <input class="button-primary" type="submit" value="Generate Report">
    </form>
    </div>
    <?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  if(isset($_POST['year'])){
  $year= $_POST['year'];
  $sql = "SELECT * FROM students WHERE year=$year ORDER BY adm_no ASC";
  echo "<table class=\"u-full-width internal\">";
      echo "<thead>";
      echo "<tr>";
          echo"<th>Adm-No</th>";
          echo"<th>Name</th>";
          echo"<th>Attendance</th>";
          echo"<th>Assignment</th>";
          echo"<th>Seminar</th>";
          echo"<th>Test1</th>";
          echo"<th>Test2</th>";
          echo"<th>WGP</th>";
          echo"<th>AGP</th>";
          echo"<th>Grade</th>";
        echo"</tr>";
      echo"</thead>";
      echo"<tbody>";
    if($result = mysqli_query($conn, $sql)){
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){ 
            $id=$row['id']; 
            $adm_no=$row['adm_no']; 
            $name=$row['firstname'] . $row['lastname'];
            $attend=$row['attend'];
            $assign=$row['assign'];
            $seminar=$row['seminar'];
            $test1=$row['test1'];
            $test2=$row['test2'];
            $wgp=$row['wgp'];
            $agp=$row['agp'];
            $grade=$row['grade'];   
             echo "<tr>";
              echo "<td>".$adm_no."</td>";
              echo "<td>".$name."</td>"; 
              echo "<td>".$attend."</td>"; 
              echo "<td>".$assign."</td>";
              echo "<td>".$seminar."</td>";
              echo "<td>".$test1."</td>";
              echo "<td>".$test2."</td>";
              echo "<td>".$wgp."</td>";
              echo "<td>".$agp."</td>";
              echo "<td><b>".$grade."</b></td>";
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

  }
  else{
    echo "Select an year to generate report";
  }
}
?>
  </div><!--end of template container-->


<?php include_once("includes/footer.php");?>