<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
session_start();
include "connection.php";
//to empty the cart table
if(isset ($_SESSION['u_id']))
mysqli_query($link,"delete from cart where u_id=".$_SESSION['u_id']);

unset($_SESSION['u_nm']);
session_destroy();
$_SESSION['u_nm']="";
header("Location:index.php");
?>