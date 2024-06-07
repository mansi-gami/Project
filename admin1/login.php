<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
//session_start();
//include "connection.php";
include "header.php";

?>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black; font-weight: bold;">  	
		<form action="logincheck.php" method="post">
        <?php
			if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>
			<br /><br />
					
			<table width="100" height="90" align="center" cellpadding="7">
			<tr>
			<center><h1>LOGIN</h1></center><br/><br/>
			<td style="font-size:24px"; style="color: black;">Admin&nbsp;Name:</td>
			<td><input type="text" name="username"></td>
			</tr>
						<tr>
			<td style="font-size:24px"; style="color: black;">Password:</td>
			<td><input type="password" name="password"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td ><input type="submit" value="submit" style="font-size:24px" ></td>
			</tr>
			</table><br /><br /><br /><br /> <br /><br />
		</div>
		</div>
		</div>
		
</div>
</section>
</div>
</form>
<?php
include "footer.php";
	?>

