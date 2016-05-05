<?php
session_start();
require_once("/includes/dbconn.php");
include_once "functions.php";
isloggedin();
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
    $adm_no=$row['adm_no'];
    $remark=htmlspecialchars($row['remarks']);
    //fetching internalmarks
    $attend=$row['attend'];
    $assign=$row['assign'];
    $seminar=$row['seminar'];
    $test1=$row['test1'];
    $test2=$row['test2'];
    $wgp=$row['wgp'];
    $agp=$row['agp'];
    $grade=$row['grade'];
  }
  }
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=$_POST['id'];
    $sql = "SELECT * FROM students WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $row = mysqli_fetch_array($result);
      $fname=$row['firstname'];
      $lname=$row['lastname'];
      $adm_no=$row['adm_no'];
      $remark=htmlspecialchars($row['remarks']);
    }
    //storing posted variables
    $attend=$_POST['attend'];
    $assign=$_POST['assign'];
    $seminar=$_POST['seminar'];
    $test1=$_POST['test1'];
    $test2=$_POST['test2'];
    $wgp=$_POST['wgp'];
    $agp=$_POST['agp'];
    $grade=$_POST['grade'];

    $sql = "UPDATE students SET attend = '$attend', assign = '$assign', seminar = '$seminar', test1 = '$test1', test2 = '$test2', wgp = '$wgp', agp = '$agp', grade = '$grade' WHERE id = '$id'";

    if (mysqli_query($conn,$sql)) {
      echo "Students Mark updated successfully";
      echo "<a href=\"internalmark.php\">";
      echo "Back to Internal marks";
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
<?php include_once "/includes/css.php";?>
</head>
<body>
<?php include_once("/includes/header.php");?>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
 <a href="internalmark.php"><h6>Back to Internal Marks</h6></a>
<section class="container student-page">
<div class="row">
  <label for="Name">Name:</label><?php echo $fname . " " . $lname; ?>
  <label for="Adm">Adm-No:</label><?php echo $adm_no; ?>
  <label for="Remark">Remarks:</label><?php echo $remark; ?>
</div><!--end of row-->
<hr/>
<hr/

<section class="test">
  <form name="addmark" method="post" action="">
    <div class="row">
      <div class="two columns">
        <label for="Attendance">Attendance</label>
        <select class="u-full-width" id="attend" name="attend">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
      <div class="two columns">
        <label for="Seminar">Seminar</label>
        <select class="u-full-width" id="seminar" name="seminar">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
      <div class="two columns">
        <label for="Assignment">Assignment</label>
        <select class="u-full-width" id="assign" name="assign">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
      <div class="two columns">
        <label for="test1">Test1</label>
        <select class="u-full-width" id="test1" name="test1">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
      <div class="two columns">
        <label for="test2">Test2</label>
        <select class="u-full-width" id="test2" name="test2">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
      <div class="two columns">
        <label for="WGP">WGP</label>
        <select class="u-full-width" id="wgp" name="wgp">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
    </div><!--end of row-->
    <div class="row">
      <div class="two columns">
        <label for="AGP">AGP</label>
        <select class="u-full-width" id="agp" name="agp">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
      <div class="two columns">
        <label for="Grade">Grade</label>
        <select class="u-full-width" id="grade" name="grade">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
    </div>
    <input type="hidden" value="<?php echo "$id";?>" name="id">
    <input class="button-primary" type="submit" value="Apply Internal Mark">
  </form>
</section>

</div><!--end of template container-->


<?php include_once("includes/footer.php");?>