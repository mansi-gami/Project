<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header.php";
include "connection.php";

				if($_SESSION['a_nm'] == "")
				{
					$msg = "<h3><center>Pls Login.</center></h3>";
			header("Location:login.php?msg=$msg");
}
else
{
		if(isset($_GET['delete']))
		{
			$del="delete from catalogue where c_id=".$_GET['delete'];
			$rs=mysqli_query($link,$del);
		}
?>

<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black; font-weight: bold;"> <br/>
      <center><h1> CATALOGUE </h1></center><br/> 	
<table align="center" cellpadding="6" border="1" height="350" width="500">
<tr>
<td colspan="5" align="right">
<a href="add_cat.php" style="font-size:18px">Add New Catalogue</a></td>
</tr>
<br />
	<?php
		$sel = mysqli_query($link,"select * from catalogue");
		while($prods=mysqli_fetch_array($sel))
		{
	?>
	<tr>
			<td style="font-size:25px"><?php echo $prods['c_id']; ?></td>
			<td><img src="images/<?php echo $prods['c_image'];?>."  alt="Img" width="150" height="150"></td>

			
			<td><a href="subcatalogue.php?c_id=<?php echo $prods['c_id']; ?>" style="font-size:25px"><?php echo $prods['c_nm']; ?></a></td>
<td height="80" width="80"><a href="edit_catalogue.php?c_id=<?php echo $prods['c_id']; ?>" style="font-size:18px">Edit</a></td>
<td><a href="catalogue.php?delete=<?php echo $prods['c_id']; ?>" style="font-size:18px">delete</a></td>
</tr>

<?php  }
			}
?>
</table>
</div>
</section>
</div>

<?php
include "footer.php";
?>