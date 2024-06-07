<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header1.php";
include "connection.php";


if(isset($_GET['c_id']))
$c_id=$_GET['c_id'];
?>

<div id="tooplate_main">

<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">
<table align="center" style="margin-left:60px">
	<center><h1>PRODUCTS</h1></center>
	</br>
	<?php
	$sel = mysqli_query($link,"select * from subcatalogue where c_id=".$c_id);
	$count=1;
	while($prods=mysqli_fetch_array($sel))
	{
		if($count>4)
		{
	?>
	<tr>
		<?php
				$count=1;
		}
		?>
	
	<td align="center" style="padding-right:15px; padding-left:15px; padding-top:15px">
	<a href="product.php?s_id=<?php echo $prods['s_id'];?>">
	<img src="images/<?php echo $prods['s_img']; ?>." alt="Img" width="150" height="180" /><br /></a>
	
	<a href="product.php?s_id=<?php echo $prods['s_id'];?>" style="font-size:24px">
	<?php echo $prods['s_nm']; ?><br /><br /></a>
	</td>
	
	<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	
	<?php
	$count++;
	}
	?>
	
	</tr>
	
	<tr>
			<td><br /><br /><br /></td>
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
			