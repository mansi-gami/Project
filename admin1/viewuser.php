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
		$del="delete from user where u_id=".$_GET['delete'];
		$rs=mysqli_query($link,$del);
	}

?>


<div id="contents">
		<div id="adbox">
		<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black; font-weight: bold;"> <br/>
      <center><h1> USER DETAILS  </h1></center><br/> 	


		<form action="" method="post">
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>  			
			<table align="center" border="1" >
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Password</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		<th>Phoneno</th>
		<th>Email ID</th>
		<th>Delete</th>
	</tr>
	<?php
		$sel="select * from user";
		$rs=mysqli_query($link,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<td><?php echo $res['u_id']; ?></td>
		<td><?php echo $res['u_nm']; ?></td>
		<td><?php echo $res['password']; ?></td>
		<td width="50"><?php echo $res['address']; ?></td>
		<td width="50"><?php echo $res['city']; ?></td>
		<td width="50"><?php echo $res['state']; ?></td>
		<td width="50"><?php echo $res['phoneno']; ?></td>
		<td width="50"><?php echo $res['email_id']; ?></td>
		<td><a href="viewuser.php?delete=<?php echo $res['u_id']; ?>">Delete</a></td>
	</tr>
	<?php } ?>
	</table>			<br />
<br />			<br />
<br />
	</form>
	</div></div>


<?php 
include"footer.php";
?>

