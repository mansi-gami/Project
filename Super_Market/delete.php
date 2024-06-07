<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include"connection.php";
$sql=mysqli_query($link,"delete from cart where cart_id='". $_GET['cart_id']."'");
//echo $sql;
$msg="The product has been deleted successfully";
header("Location:cart.php?msg=$msg");
?> 