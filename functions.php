<?php

function isloggedin(){
	if(!isset($_SESSION['username'])){
 		header("location:index.php");
	}
}


function addnotification(){
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title=$_POST['title'];
  $details=$_POST['details'];
  $details=htmlspecialchars($details);
  require_once("/includes/dbconn.php");
  $sql = "INSERT INTO notifications (id, title, details, creation) VALUES ('', '$title', '$details', CURDATE())";
  if (mysqli_query($conn,$sql)) {
    echo "New Notification created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }
}

function updatenotification(){
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
}

function displayexistingnotification(){
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
}

function addstudent(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    $sql = "INSERT INTO students (id, firstname, lastname, dob, gender, year, phone, parent, email, adm_no, remarks) VALUES ('', '$fname', '$lname', '$dob','$gender','$year', '$phone_no','$parent','$email','$adm_no','$remark')";

    if (mysqli_query($conn,$sql)) {
      echo "New Student added successfully";
      echo "<a href=\"admin.php\">";
      echo "back";
      echo "</a>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}

function displayexistingstudent(){
  if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $id = $_GET['id'];
  $sql = "SELECT * FROM students WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $row = mysqli_fetch_array($result);
    $fname=$row['fname'];
    $lname=$row['lname'];
    $year=$row['year'];
    $adm_no=$row['adm_no'];
    $phone_no=$row['phone_no'];
    $email=$row['email'];
    $dob=$row['dob'];
    $parent=$row['parent'];
    $gender=$row['gender'];
    $remark=htmlspecialchars($row['remarks']);
  }
  }
}
function addteacher(){
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname=$_POST['uname'];
    $userlevel=2;
    $pass=$_POST['password'];
    require_once("/includes/dbconn.php");

    $sql = "INSERT INTO users (id, username, password, userlevel) VALUES ('', '$uname', '$pass', '$userlevel')";

    if (mysqli_query($conn,$sql)) {
      echo "New Teacher added successfully";
      echo "<a href=\"admin.php\">";
      echo "back";
      echo "</a>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}

?>