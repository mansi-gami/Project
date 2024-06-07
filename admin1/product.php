<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php 
include "header.php";
include "connection.php";

if($_SESSION['a_nm']=="")
					
					{
					$msg = "Pls Login first.Then u will b able to c shop page";
			header("Location:login.php?msg=$msg");
}else
{
	if(isset($_GET['delete']))
	{
		$del="delete from product where p_id=".$_GET['delete'];
		$rs=mysqli_query($link,$del);
	}
$s_id= $_GET['s_id'];
?>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black; font-weight: bold;"> <br/>
      <center><h1> PRODUCT </h1></center><br/> 	


<table   align="center" border="1">
<tr >
		<td colspan="5" align="right" height="50" style="font-size:18px">
				<?php 
				if(isset($_GET['msg']))
				echo $_GET['msg'];?>
				<input type="button" name="b1" onclick="tmp()" style="background-color:#999"value="Back" style="font-size:18px"/>
		</td>	
</tr>            
			
<?php
$sel = mysqli_query($link,"select * from product1 where s_id=$s_id");

while($prods=mysqli_fetch_array($sel))
{
?>
		<tr >
		<td height="80" width="70">
				<img src="images/<?php echo $prods['p_image']; ?>." alt="Img" width="140" height="120">
			</td>	
				<td height="80" width="100" style="font-size:18px">
					<?php echo $prods['p_nm']; ?>
				</td>	
				<td height="80" width="70" style="font-size:18px">
					<?php echo $prods['p_price']; ?>
				</td>
				<td height="80" width="80"><a href="edit_product.php?s_id=<?php echo $s_id .' '.'& p_id='.$prods['p_id'];  ?> " style="font-size:18px">Edit</a></td>
			
				<td><a href="product.php?s_id=<?php echo $s_id .' '.'& delete='.$prods['p_id'];  ?> "style="font-size:18px">delete</a></td>									
			</tr>
			
<?php } ?>

</table></br>
</div>
</section>
</div>
<script>
	function tmp()
	{
		history.back();
	}	
</script>
<?php } ?>
</div>
	</div>


<div class="article">
			  
  </div>
<?php include "footer.php";
?>