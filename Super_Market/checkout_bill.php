<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
	include("connection.php");
	include("header2.php");
	
	$name = $_REQUEST['fname']." ".$_REQUEST['lname'];
	$add = $_REQUEST['add'];
	$contact = $_REQUEST['phone'];
	$city = $_REQUEST['city'];
	$email = $_REQUEST['email'];
	
	
?>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">
<div id="content">
  <div class="content-padding"><br>

	<h1 align="center">BILLING DETAILS</h1>
	
<br>
			<form action="done.php" method="post">
	<table border="1" bordercolor="#000000"  width="70%" align="center">
	
					
			
			<tr>
			<td colspan="4"><center><h3 class="style1">Super Market Store</h3></center></td>
			</tr>
			
			<tr>
			<td  align="left" style="font-size:16px">Name : <?php echo $name; ?><br/>
			Contact :<?php echo $contact; ?><br />
			Email id :<?php echo $email; ?></td>
			<td colspan="3" align="left" style="font-size:16px">Address : <?php echo $add; ?><br />
			City :<?php echo $city; ?><br />
			Date :<?php echo date("d/m/y"); ?></td>
			</tr>
			
			<tr>
			<th style="font-size:16px">Product Name</th>
			<th style="font-size:16px">Quantity</th>
			<th colspan="1" style="font-size:16px">Price</th>
			<th colspan="1" style="font-size:16px">Total</th>
			</tr>
<?php
	$tot =0;
	$q = "select * from cart where u_id = ".$_SESSION['u_id'];
  $r = mysqli_query($link,$q);
  		while($result=mysqli_fetch_row($r))
		{
			echo "<tr align='center' style='font-size:18px'>
			<td>$result[3]</td>
			<td>$result[5]</td>
			<td>$result[4]</td>";
			$tmp=$result[5] * $result[4];
			echo "<td>$tmp</td>
			</tr>";
			$tot = $tot + $result[4]*$result[5];
		}
			
			echo "<tr align='center' style='font-size:18px'><td colspan=3 align='right'>Your Grand total is&nbsp; </td><td>$tot</td></tr>";
		?>
		
		<tr>
		
			<td align="right" rowspan="5" colspan="4"><input type="submit" value="Done"></td>
				</tr>
			</table>
			</form>
			<br/>
			</div>
</section>
</div>
			
			<?php
			$q="insert into checkout(c_name,c_add,c_city,c_phone,c_email,grand_total) values('$name','$add','$city','$contact','$email','$tot')";
		mysqli_query($link,$q);
		
		$q1="select max(chout_id) from checkout";
		$id1=mysqli_fetch_array(mysqli_query($link,$q1));
		 
		 
	$qry="select * from cart where u_id=". $_SESSION['u_id'];
			//echo $qry2;
			$res=mysqli_query($link,$qry);
			//$date=date("y-m-d");
			while($row =mysqli_fetch_array($res))
			{
					$p_id=$row[1];
					$p_nm=$row[3];
					$p_price=$row[4];
					$p_qnt=$row[5];
					$u_id=$_SESSION['u_id'];
					
					//$qry1="insert into bill (u_id,p_id,p_nm,p_price)values($u_id,$p_id, '$p_nm', $p_price)";
					$qry1="insert into bill (u_id,p_id,p_nm,p_price,qty,c_id)values($u_id,$p_id,'$p_nm','$p_price',$p_qnt,$id1[0])";
					mysqli_query($link,$qry1);
					$product="select * from product1 where p_id=$p_id";
					$sproduct=mysqli_fetch_array(mysqli_query($link,$product));
					
					$tot_qty=$sproduct[6]-$p_qnt;
					$updqty="update product1 set tot_qty=$tot_qty where p_id=$p_id";
					mysqli_query($link,$updqty);
			
					
				$qry2="delete from cart where u_id=" .$_SESSION['u_id'];
				mysqli_query($link,$qry2);
				
				?>
			
		</div>
</div>


<div id="body-divider"></div>
<?php }include "footer.php"; ?>