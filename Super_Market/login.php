<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "connection.php";
include "header4.php";
?>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black; font-weight: bold;">
	<div id="contents">
		<div id="adbox">
			<center>
			<form action="logincheck.php" method="post">
			<?php
			if(isset($_GET['msg']))
				echo $_GET['msg'];
				
				
			?>
			<br/><br/>
<center><h1> Login </h1></center>
			<br/>
				<table width="319" height="90" align="center" cellpadding="7">
				<tr>
				<td width="98" style="font-size:24px; font-weight: normal;">Username:</td>
				<td width="185"><input type="text" name="u_nm" placeholder="username" required></td>
				</tr>
				
					<tr>
				<td style="font-size:24px; font-weight: normal;">Password:</td>
				<td><input type="password" name="password" placeholder="password" required></td>
				</tr>
					
					<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="submit" style="font-size:24px">
					<input type="reset" value="reset" style="font-size:24px">
				</td>
				</tr>
					
					<tr>
				<td>&nbsp;</td>
				<td><a href="registration.php" style="font-size:24px; font-weight: normal;">Registration</a></td>
			</tr>
</table>
</center>
</form>
</div>
</div>
</div>
</section>
</div>
<?php include "footer.php"; ?>

			
			