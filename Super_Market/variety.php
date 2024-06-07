<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header1.php";
include "connection.php";
?>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">
<table align="center" style="margin-center:60px">
<center><h1>VARIETY</h1></center>
</br>
	<?php
		$sel = mysqli_query($link,"select * from catalogue");
		$count=1;
		while($cat=mysqli_fetch_array($sel))
		{
		if($count>3)
		{
	?>
	</tr>
	<tr>
	<?php
		$count=1;
		}
	?>
		<center><td width="140px">	
			
		<a href="subcatalogue.php?c_id=<?php echo $cat['c_id'];?>"style="font-size:32px"><img src="images/<?php echo  $cat['c_image'];?>." alt="Img" width="300" height="300"/><br />

	<?php 
		echo "<span><center>".$cat['c_nm']."</span></center><br><br>"
	?></a>
	  </td></center>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
		</td>
		
	
  	<?php
		$count++;
		}//end of while
	?>
	</tr>
	
	
</table>
</div>
</section>
</div>

<?php
include "footer.php";
?>