<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header.php";
include "connection.php";

				if($_SESSION['a_nm'] == "")
				{
					$msg = "Pls Login. ";
			header("Location:login.php?msg=$msg");
}else
{
	if(isset($_GET['delete']))
	{
		$del="delete from subcatalogue where s_id=".$_GET['delete'];
		$rs=mysqli_query($link,$del);
	}
	$c_id= $_GET['c_id'];
?>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black; font-weight: bold;"> <br/>
      <center><h1> SUB CATALOGUE </h1></center><br/> 	


<table align="center" border="1" cellpadding="6" width="40%">
<tr>
<td colspan="5" align="right">
<a href="add_subcat.php?c_id=<?php echo $c_id; ?>" style="font-size:18px">Add New SubCatalogue</a>

	
    </td>
</tr>
<?php
$sel = mysqli_query($link,"select * from subcatalogue where c_id= $c_id");
while($prods=mysqli_fetch_array($sel))
{
?>
<tr>
<td><?php echo $prods['s_id']; ?></td>
<td><img src="images/<?php echo $prods['s_img']; ?>." alt="Img" width="100" height="100"></td>
<td> <?php echo $prods['s_nm']; ?></a></td>

<td height="80" width="80"><a href="edit_subcatalogue.php?c_id=<?php echo $c_id .' '.'& s_id='.$prods['s_id'];  ?> " style="font-size:18px">Edit</a></td>

<td><a href="subcatalogue.php?c_id=<?php echo $c_id .' '.'& delete='.$prods['s_id'];  ?> "style="font-size:18px">delete</a></td>		
		</tr>
		
	
 <?php }?>
 </table>
</div>
</section>
</div>
 <?php 
	}
?>
<?php include"footer.php"?>