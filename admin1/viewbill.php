<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "connection.php";
include "header.php";

if(!isset($_SESSION['a_nm']))
{
	header("Location:login.php");
}
	if(isset($_GET['delete']))
	{
		$del="delete from bill where b_id=".$_GET['delete'];
		$rs=mysqli_query($link,$del);
	}

?>


<div id="contents">
		<div id="adbox">
			<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black; font-weight: bold;"> <br/>
      <center><h1> BILL DETAILS </h1></center><br/> 	

		<form action="" method="post">
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>  			
			<table align="center" border="1" >
	<tr>
		<th>Bill ID</th>
		<th>User ID</th>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Product Price</th>
		<th>Checkout ID</th>
		<th>Quantity</th>
		<th>Delete</th>
	</tr>
	<?php
		$sel="select * from bill";
		$rs=mysqli_query($link,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<td><?php echo $res['b_id']; ?></td>
		<td><?php echo $res['u_id']; ?></td>
		<td><?php echo $res['p_id']; ?></td>
		<td width="50"><?php echo $res['p_nm']; ?></td>
		<td width="50"><?php echo $res['p_price']; ?></td>
		<td width="50"><?php echo $res['qty']; ?></td>
		<td width="50"><?php echo $res['c_id']; ?></td>
		<td><a href="viewbill.php?delete=<?php echo $res['b_id']; ?>">Delete</a></td>
	</tr>
	<?php } ?>
	</table></br>
</br></br>
	</form>
	</div></div>
	</div>

</section>
</div>
<?php
include"footer.php";
?>
	

