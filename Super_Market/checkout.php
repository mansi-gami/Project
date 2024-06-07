<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include("connection.php");
include("header2.php");


	$q = "select * from cart where u_id = ". $_SESSION["u_id"];
	//echo $q;
	$r = mysqli_query($link,$q);
$cnt=mysqli_num_rows($r);
if($cnt<1)
	{
		$msg="No product selected";
		header ("location:cart.php?msg=$msg");
	}
	else
	{
?>



<script type="text/javascript">
function validate(frm)
{
	if(frm.fname.value =="")
	{	alert("Enter First name");
		frm.fname.focus();
		return false;
	}
	else if(frm.add.value =="")
	{	alert("Enter Address");
		frm.add.focus();
		return false;
	}
	else if(frm.city.value =="")
	{	alert("Enter City name");
		frm.city.focus();
		return false;
	}
	else if(frm.phone.value =="")
	{	alert("Enter phone no");
		frm.phone.focus();
		return false;
	}
	else if(frm.email.value =="")
	{	alert("Enter Email_id");
		frm.email.focus();
		return false;
	}
	
}
function f1(e)
{
	var charode = e.which || e.keycode;
	if((charcode>=65 && charcode<=90) || (charcode>=97 && charcode<=122) || charcode==9 || charcode==46 || charcode==8)
	return true;
	
	return false;
}

function email1()
{
	var reg=/^([A-Za-z0-9_\-\.]+\@([A-Za-z0-9_\-\,])+([A-Za-z]{2,4})$/;
	var adderess =document.email.value)==flase)
	{
		alert('Invalid Email Address');
		address.email.focus();
		return false;
	}
}
function c1(e)
{
	var charCode=e.which || e.keyword;
	if(charCode>=65 && charCode<=90) || (charCode>=97 && charCode<=122) || (charCode>=9 || charCode<=46 || charcode == 8) 
	return true;
	
	return false;
}

function pno(e)
{

		var charcode = e.which || e.keycode;
		if ((charCode>=48 && charCode<=57) || (charCode<= 105 && charCode>=96) || (charCode == 8 || charCode == 46 || charcode == 9)
		
			return true;
			
		return false;
}
function onlyNumber(e)
{

			var charcode = e.which || e.keycode;
			if ((charcode >= 48 && charcode <= 57 ) || (charcode <=105 && charcode >= 96) || charcode == 8 || charcode == 46 || charcode == 9)
			return true;
			
		return false;
}
</script>
	<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">
			<table align="center">
			<tr>
					
				<h1 align="center"  style="font-size:50px">CHECK-OUT</h1>
				
			</tr>
			<br/>
				<tr style="font-size:20px"></tr><td align="center"></td>
			<table border="1" bordercolor="black" width="70%" align="center">
			<tr align="center"><th height="75">Product Name</th><th>Quantity</th><th>Price</th><th>Total</th></tr>
			<?php
			
			 $tot =0;
			 while($result=mysqli_fetch_row($r)){
			 
			 	$cal=$result[4]*$result[5];
				
				?>
				<tr align="center" style="font-size:18px">
				<td><?php echo $result[3] ?></td>
				<td><?php echo $result[5] ?></td>
				<td><?php echo $result[4] ?></td>
				<td><?php echo $cal ?></td>
				</tr>
				
				<?php $tot = $tot + $result[4]*$result[5];
				}?>
			 	<tr align="center" style="font-size:18px">
				<td colspan="3" align="right"> Total&nbsp;</td>
				<td><?php echo $tot ?></td></tr>
				
			</table>
			<table align="center" cellpadding="10" width="372">
				<form action="checkout_bill.php" method="post" onsubmit="return validate(this)" id="register">
					<br/>
				<tr>
					<td colspan="2" align="center"><h2 style="color:black;">Enter your Billing Details</h2></td>
					</tr>
					<tr>
						<td align="center">First Name</td>
						<td><input type="text" name="fname" onkeypress="return f1(event);" required></td>
					</tr>
					<tr>
						<td align="center">Last Name</td>
						<td><input type="text" name="lname" onkeypress="return l1(event);" required></td>
					</tr>
					<tr>
						<td align="center">Address</td>
						<td style="font-size:16px"><textarea name="add" cols="15" rows="5" required></textarea></td>
					</tr>
					<tr>
						<td align="center">City</td>
						<td><input type="text" name="city" onkeypress="return c1(event);" required></td>
					</tr>
					<tr>
						<td align="center"> Phone</td>
						<td><input type="text" name="phone" maxlength="10" onkeydown="return pno(event);" required></td>
					</tr>
					<tr>
						<td align="center">Email</td>
						<td><input type="text" name="email" onblur="return email1();" required></td>
					</tr>
					<tr>
						<td><input type="submit" value="Checkout"></td>
					</tr>
				</form>
			</table>
		</table>

</div>
</section>
</div>
				<div id="body-driver"></div>
<?php
}
include "footer.php";
 ?>