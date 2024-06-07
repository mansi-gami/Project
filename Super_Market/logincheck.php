<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
 include "header.php";
 include "connection.php";
 //session_start();
 $username =$_POST['u_nm'];
 $password  =$_POST['password'];
 $rs =mysqli_query($link," select * from user where u_nm='".$username."' and password='".$password."'");
 $cnt=mysqli_num_rows($rs);
 
 if($cnt>=1)
 {
 	$_SESSION['u_nm'] =$username;
	header("Location:variety.php");
 }
 else
 {
 	$msg = "Username or  Password are not correct, try again.";
	header("Location:login.php?msg=$msg");
 }
?>
 