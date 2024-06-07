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
		$del="delete from feedback where f_id=".$_GET['delete'];
		$rs=mysqli_query($link,$del);
	}

?>


<div id="contents">
	
	<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black; font-weight: bold;"> <br/>
      <center><h1> FEEDBACK DETAILS </h1></center><br/> 	
		<form action="" method="post">
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>  			
			<table align="center" border="1" >
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>City</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Delete</th>
	</tr>
	<?php
		$sel="select * from feedback";
		$rs=mysqli_query($link,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<td><?php echo $res['f_id']; ?></td>
		<td><?php echo $res['f_nm']; ?></td>
		<td><?php echo $res['city']; ?></td>
		<td width="50"><?php echo $res['email']; ?></td>
		<td width="50"><?php echo $res['product']; ?></td>
		<td width="50"><?php echo $res['message']; ?></td>
		<td><a href="viewfeedback.php?delete=<?php echo $res['f_id']; ?>">Delete</a></td>
	</tr>
	<?php } ?>
	</table><br /><br /><br /><br /><br /><br /> 
	</form>
</div>
</section>
</div>
	</div> <!-- end of main -->
	
	
	
	
	
</div> <!-- end of fp 100% wrapper

	</div> -->

<?php
include"footer.php";
?>
	
