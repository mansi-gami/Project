<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php


include "connection.php";
$u_nm = $_POST['u_nm'];
$password = $_POST['password'];
$address =  $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$email_id = $_POST['email_id'];
$phoneno = $_POST['phoneno'];


$r = mysqli_num_rows(mysqli_query($link,"select * from user where u_nm='".$u_nm."'"));
//$r = mysql_num_rows(mysql_query("select * from regisration where u_nm='".$username."' and pwd='".$password."'"));
//echo $r;
if($r<1)
{
//myaql_query("insert into registration(u_nm,pwd,city,pno,email,wsite,enm)
//value('$u_nm','$pwd','$city','$cno','$email','$wsite','$enm')";

$sql = "INSERT INTO user 
(u_nm,password,address,city,state,phoneno,email_id) values('".$u_nm."','".$password."','".$address."','".$city."','".$state."','".$phoneno."','".$email_id."')";
//echo $sql;

	//$sql ="INSERT INTO user values('".$_POST['unm']."');
	
//,'.$_POST['pwd'].','.$_POST['city'].','.$_POST['add'].','.$_POST['pno'].')';
//echo $sql;
$res = mysqli_query($link,$sql);
if ($res)
{
	$msg = "Successfully Registed!!..";
	header("Location:login.php?msg=$msg");
}

}
else
{
	$msg = "Username already exists!!..";
	header("Location:registration.php?msg=$msg");
}
?>