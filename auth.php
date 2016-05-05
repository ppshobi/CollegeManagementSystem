<?php
session_start();
require_once("includes/dbconn.php");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$userlevel=$row['userlevel'];
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username']= $myusername;
$_SESSION['password']= $mypassword;
$_SESSION['userlevel']= $userlevel;
if($userlevel==1){
	header("location:admin.php");
}
else{
	header("location:teacher.php");
}
}
else {
echo "Wrong Username or Password";
}
?>