<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
	include("connection.php");
if(!isset($_SESSION['u_nm']))
{
	$msg = "Pls Login to c the shop page";
	header("Location:login.php?msg=$msg");
}
else
{
?>
	<?php
	if(isset($_POST['updQuantity']))
	{
			$arr=$_POST['proQuantity'];
			foreach($arr as $key=>$value)
			{
					$upd="update cart set p_qnt'".$value."' where c_id='".$key."'";
					mysqli_query($link,$upd);
			}
	}
	if(!$_GET['$msg'])
	
{
		//to fetch product from product table
$sql="select * from product1 where p_id=".$_GET['p_id'];
$res=mysqli_query($link,$sql);
$row=mysqli_fetch_row($res);
//echo $res;
}

//to fetch userid from user table
	$sql1="select * from user where u_nm='".$_SESSION['u_nm']."'";
	$res1 = mysqli_query($link,$sql1);
		$row1 = mysqli_fetch_row($res1);
		$_SESSION['u_nm'] = $row1[0];
		
		if(!$_GET['msg'])
{
$sql2 ="INSERT INTO cart (p_id,u_id,p_nm,p_price,p_image,p_qnt)
VALUES ('".$row[0] ."','".$row1[0]."','".$row[2] ."','".$row[3]."','". $row[4]."','". $row[5]."')";
$res2 = mysqli_query($link,$sql2);
}
 $q = "select * from cart where u_id = ".$row1[0];
 $r = mysqli_query($link,$q);
 
 ?>
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title>Footwear Shop Cart</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
		<link rel="stylesheet" type="text/css" href="style.css"/>
        <style type="text/css">
<!--
.style1 {color: #000000}
-->
        </style>
</head>
<body>
<div id="mainblock">
		<!--inner block starts here -->
  <div id="innerblock">
		<?php include_once("header.php"); ?>
				<div id="form_tab">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				  <table border="1" cellpadding="7"  align="center">
					<tr>
						<th>Product Name</th>
						<th>Product Quantity</th>
						<th>Product Price</th>
						<th>Remove Product</th>
					</tr>

					<?php
							$mul=0;
							$sel="select * from cart where u_id='".$_SESSION['u_nm']."'";
							$rs=mysql_query($sel);
							while($res=mysql_fetch_array($rs))
							{
					?>
			<tr>
				<td align="center"><?php echo $res['p_nm']; ?></td>
				<td align="center"><input type="text" size="3" value="<?php echo $res['p_qnt']; ?>" name="proQuantity[<?php echo $res['c_id'] ?>]"></td>
			<td align="center"><?php echo $res['p_price']; ?></td>
			
			<td align="center"><a href="delete.php?delId=<?php $res['c_id'] ?>">Remove</a></td>
				  </tr>
						<?php
							$mul= $mul+($res['p_price']*$res['p_qnt']);
						}
						?>
						<tr>
						  <td colspan="4"><input type="submit" value="update" name="updQuantity" style="margin-left:100px;" /><h3 style="margin-top:-25px; margin-left:200px;">Grand Total :-<?php echo $mul;  ?></h3></td>
					  </tr>
							<tr>
								<td colspan="4">
									<a href="productdetail.php" id="addcart">Continue Shopping</a>&nbsp;&nbsp;												                                    <a href="checkout.php" id="addcart">Check Out</a>								</td>
							</tr>
				  </table>
				  </form>
		  </div>
		  <?php include_once("footer.php");?>
		 <!--inner block ends up-->
					</div>
				</div>
			<!--main ends up-->
				</body>
				</html>
?>		