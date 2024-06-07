<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header1.php";
include "connection.php";


if(isset($_GET['s_id']))
$s_id=$_GET['s_id'];
?>

<div id="tooplate_main">

<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">
<table align="center" >

	<center><h1>PRODUCT DETAIL</h1></center>

	<?php
	$sel = mysqli_query($link,"select * from product1 where s_id=".$s_id);
	$count=1;
	while($prods=mysqli_fetch_array($sel))
	{
		if($count>3)
		{
	?>
	<tr>
		<?php
				$count=1;
		}
		?>
	
	<td align="center" style="padding-right:15px; font-size: 25px; padding-left:15px; padding-top:15px">
	<a href="product.php?s_id=<?php echo $prods['p_id'];?>">
	<img src="images/<?php echo $prods['p_image']; ?>." alt="Img" width="300" height="300" /><br /></a>
	
	<?php echo $prods['p_nm']; ?><br /></a>
	<?php echo "price:".$prods['p_price']; ?><br /><br />
	<?php echo "<a href='cart.php?p_id=".$prods['p_id']."'>Add to cart</a>";?> 
	</td>
	
	<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	
	<?php
	$count++;
	}
	?>
	
	</tr>
	
	<tr>
			<td><br /><br /></td>
  </tr>
</table>
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
			include "footer.php";
			
			?>
			