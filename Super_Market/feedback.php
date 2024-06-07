<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php include "header3.php";
include "connection.php";?>
		<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">
		
		<table align="center" width="500" height="500"><tr>
			<div id="mid_title">
				<center><td colspan="2" align="center"><h1>FEEDBACK</h1>
			<?php	if(isset($_GET['msg']))
						echo $_GET['msg'];
			?>
				</td></center><br />
				</tr>
		
		</div> <!-- end of middle -->
		
	
			
					<form method="post" name="contact" action="save feedback.php">
	<tr>
	<td><label for="author" style="font-size:18px">Name:</label></td>
	<td><input type="text" maxlength="40" id="author" class="input_field" name="f_nm" required /></td>
	</tr>
							
     <tr>
	 <td><label for="city" style="font-size:18px">City:</label></td> 
	 <td><input type="text" maxlength="40" id="city" class="input_field" name="city" required /></td>
	</tr>
	
	<tr>
	<td><label for="email" style="font-size:18px">Email:</label></td> 
	<td><input type="text" maxlength="40" id="email" class="input_field" name="email" required /></td>
	</tr>
								
	<tr>
	<td><label for="product" style="font-size:18px">product:</label></td>
	<td> <input type="text" maxlength="40" id="product" class="input_field" name="product" required /></td>
	</tr>
	
	<tr>
	<td><label for="message" style="font-size:18px">Message:</label></td> 	
	<td><textarea id="text" name="message" rows="5" cols="22" class="required"></textarea></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" style="font-size:18px" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="Reset" id="reset" name="reset" style="font-size:18px"/></td>
	</tr>
						
	</form>
	</table>
				
				
			
</div>
</section>
</div>
<?php include "footer.php";?>