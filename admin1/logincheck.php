<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header.php";
include "connection.php";
 $username = $_POST['username'];
 $password =  $_POST['password'];
$r = mysqli_num_rows(mysqli_query($link,"select * from admin where a_nm='".$username."' and a_password='".$password."'"));
if($r >= 1)
{
	$_SESSION['a_nm'] = $username;
	
	header("Location:index.php");
}
else
{
	$msg = "<h3>Username or Password are not correct, try again.</h3>";
	header("Location:login.php?msg=$msg");
}
include "footer.php";

?>
