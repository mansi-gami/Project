<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php

include "connection.php";
$f_nm = $_POST['f_nm'];
$city = $_POST['city'];
$email = $_POST['email'];
$product = $_POST['product'];
$message = $_POST['message'];

//$r = mysql_num_rows(mysql_query("select * from feedback where f_nm='".$name."'"));
//$r = mysql_num_rows(mysql_query("select * from registration where unm='".$username."' and pwd='".$password."'"));
//echo $r;
//if($r<1)
//{
//mysql_query("insert into registration(unm,pwd,city,mno,email,wsite,enm) values("'$unm','$pwd','$city','$cno','$email','$wsite','$enm')");

$sql = "INSERT INTO feedback (f_nm,city,email,product,message)
values('".$f_nm."','".$city."','".$email."','".$product."','".$message."')";
//echo $sql;

//sql = "INSERT INTO user values('".$_POST['unm']."')";

//,'.$_POST['pwd'].','.$_POST['city'].','.$_POST['add'].','.$_POST['pno'].')';
//echo $sql;
$res = mysqli_query($link,$sql);
if ($res)
{
		$msg = "Successfully!!..";
		header("Location:thanks.php?msg=$msg");
}
//}
else
{
		$msg = "not Successfully!!..";
		header("Location:feedback.php?msg=$msg");
}
?>