<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "connection.php";
include "header2.php";

if(!isset($_SESSION['u_nm']))
{
	$msg = "Pls Login to c the shop page";
	header("Location:login.php?msg=$msg");
}
else
{
?>
<?php
	if(isset($_POST['s1']))
	{
		$msg="";
		$arr=$_POST['p1'];
		foreach($arr as $key=>$value)
		{
			$cart="select p_id from cart where cart_id=".$key;
			$tmp=mysqli_query($link,$cart);
			$tmp1=mysqli_fetch_row($tmp);
			$product="select * from product1 where p_id=".$tmp1[0];
			$product1=mysqli_query($link,$product);
			$product2=mysqli_fetch_row($product1);
			if($value>$product2[6])
			{
				$msg=$msg."<br><h3 align='center'>only $product2[6] $product2[2] is available</h3>";
			}
			else
			{
				//$msg="";
				$upd="update cart set p_qnt=".$value." where cart_id=".$key;
				mysqli_query($link,$upd);				
			}
		}
	}
	if(isset($_GET['p_id']))
	{
		$p_id=$_GET['p_id'];
	}
	if(!isset($_POST['s1']))
	{
		if(isset($_GET['p_id']))
		{
			if(!isset($_GET['msg']))
			//if(!$_GET['msg'])
			{
				//to fetch product from product table
			
				$sql="select * from product1 where p_id=$p_id";
				$res = mysqli_query($link,$sql);
				$row = mysqli_fetch_row($res);
			
				//echo $res;
			}
				//to fetch u_id from user table
				$sql1="select * from user where u_nm='".$_SESSION['u_nm']."'";
				$res1 = mysqli_query($link,$sql1);
				$row1 = mysqli_fetch_row($res1); 
				$_SESSION['u_id'] = $row1[0] ;
			if(!isset($_GET['msg']))
			{
				if($row1[6]<=0)
				{
					$msg="<h3 align='center'>$row1[2] is not available</h3>";
				}
				else
				{
				$msg="";
				$sql2 = "INSERT INTO cart(p_id,u_id,p_nm,p_price,p_image,p_qnt) VALUES ('".$row[0] ."','".$row1[0]."','".$row[2] ."','".$row[3] ."','". $row[4]."','".$row[5]."')";
	
				$res2 = mysqli_query($link,$sql2);
				header("Location:cart.php");
				}
			}
		}
	}
	$q = "select * from cart where u_id = ".$_SESSION['u_id'];
	$r = mysqli_query($link,$q);
 
?>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">
<form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<div align="center" >
		<table align="center" border="1" bordercolor="#000" cellpadding="5">
			<br><h1 align="center">SHOPPING CART</h1></br>
        	<!-- <table cellpadding="10" cellspacing="5" id="checkout">
			<tr><td colspan="2"></td>-->
			
			<tr>
				<td style="font-size:18px">Product Image</td>
				<td style="font-size:18px"> Product Name &<br> Price</td>
				<td style="font-size:18px"> Product Quantity </td>
				<td style="font-size:18px">  Delete </td>
			</tr>						
			<?php
				$tot = 0;

				while($result=mysqli_fetch_row($r))
				{ 
			?>	
					<tr> 
						<td> 
						<img src="images/<?php echo $result[2]; ?>" alt="Img" width="150" height="150">
						
						</td> 
						<td style="font-size:18px"> 	
							<?php
								echo $result[3]."<br>";  
								echo "Rs.: ".$result[4];
							?> 
						</td>
						<td align="center">
							<input type="text" size="3" value="<?php echo $result[5]; ?>" name="p1[<?php echo $result[0] ?>]" /></td>
						<td>
						
						 <a href="delete.php?cart_id=<?php echo $result[0];?>"  style="font-size:18px"><?php echo "Remove";?></a> 
						</td>
					</tr>
			<?php 
				$tot = $tot + $result[4]*$result[5];
			?>
			<?php          
			   } 
			?>            
			</head></body>
			
			<tr>
			<td style="font-size:18px"> Total payable amt: </td>
			<td colspan="2" align="left"  style="font-size:18px"><?php echo "Rs.: ".$tot; ?> </td>
			<td><input type="submit" name="s1" value="update" /></td>
			</tr></tr>
				<tr><td colspan="3"><a href="checkout.php" style="font-size:22px">checkout</a></td></tr>
			
		</table>
	</div>
</form>
<div class="buttons">
	<br /><a href="variety.php" style="font-size:24px"><center>Continue Shopping</center></a> 
</div>
				

</div>
	</div>
	<div class="article">
</div>
</div>
</section>
</div>

<script>
	function tmp()
	{
		history.back();
	}	
</script>

<?php
//$_REQUEST = $_POST =$_GET = NULL;
 include "footer.php";
 }?>