<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
session_start();
include "connection.php";
//to empty the cart table
mysqli_query($link,"delete from cart");
unset($_SESSION['a_nm']);
session_destroy();
$_SESSION['a_nm']="";
header("Location:login.php");
?>