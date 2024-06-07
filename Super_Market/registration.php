<?php

include "header4.php";

?>
<script type="text/javascript">
function validate(frm)
{
	if(frm.unm.value == "")
	{
		alert("enter user name");
		frm.unm.focus();
		return false;
	}
	else if(frm.pwd.value =="")
	{
		alert("enter user password");
		frm.pwd.focus();
		return false;
	}
	else if(frm.cpwd.value =="")
	{
		alert("enter user confirm password");
		frm.pwd.focus();
		return false;
	}
	else if(frm.add.value =="")
	{
		alert("enter user address");
		frm.add.focus();
		return false;
	}
	else if(frm.city.value =="")
	{
		alert("enter user city name");
		frm.city.focus();
		return false;
	}
	else if(frm.state.value =="")
	{
		alert("enter user state name");
		frm.state.focus();
		return false;
	}
	else if(frm.pno.value =="")
	{
		alert("enter user phone no");
		frm.pno.focus();
		return false;
	}
	else if(frm.eid.value =="")
	{
		alert("enter user email id");
		frm.eid.focus();
		return false;
	}
	else if(frm.pwd.value!=frm.cpwd.value)
	{
		alert("reenter your correct password");
		frm.pwd.focus();
		return false;
	}
	
			
	return true;
}

function onlyNumbers(e)
{
	var charcode=e.which || e.keycode;
	if((charcode >= 48 && charcode <=57) || charcode==9 || charcode==8) tr
	return true;
	
	return false;
}

function onlychar(e)
{
	var charcode=e.which || e.keycode;
	if((charcode >=  65 && charcode <=90) || (charcode >=97 &&charcode<=122)|| charcode==9 || charcode==46 || charcode==8)
	return true;
	
	return false;
}


function email1()
{
	var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])=\.([A-Za-z]{2,4})$/;
	if(reg.test(frm.eid.value) == false)
	{
		alert ('invalid email address');
		frm.eid.focuss();
		return  false;
	}
}
</script>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">

	
<table width="600" height="450" align="center" cellpadding="7">

<form action="saveuser.php" name="frm" method="post" onSubmit="return validate(this)">

		<?php
		if(isset($_GET['msg']))
		echo $_GET['msg'];
		?><br />
	
<tr> <td colspan="2" align="center"><h1>Regitrastion</h1></td>
</tr>

<tr>
	<td style="font-size:24px" width="200">Username : </td>
	<td width="0"><input type="text" name="u_nm" style="font-size:20px" height="50" width="52" onKeyDown="return onlychar(event);" required /></td>
	</tr>

<tr>
	<td style="font-size:24px"> Password :</td>
	
		<td><input type="password" name="password" style="font-size:20px" height="50" width="50" required /></td>
</tr>

<tr>
	<td style="font-size:24px"> Confirm Password:</td>
	
		<td><input type="password" name="cpwd" style="font-size:20px" height="50" width="50" required /></td>
</tr>

<tr>
	<td style="font-size:24px"> Address :</td>
	
		<td><textarea name="address" rows="5" cols="20" style="font-size:18px" height="50" width="50" required></textarea></td>
</tr>

<tr>
	<td style="font-size:24px"> City :</td>
	
		<td><input type="text" name="city" style="font-size:20px" height="50" width="50" required /></td>
</tr>

<tr>
	<td style="font-size:24px"> state :</td>
	
		<td><input name="state" rows="5" cols="20" style="font-size:20px" height="50" width="50" required /></td>
</tr>

<tr>
	<td style="font-size:24px"> Email id :</td>
	
		<td><input type="text" name="email_id" style="font-size:20px" height="50" width="50" onBlur="return email1();" required /></td>
</tr>

<tr>
	<td style="font-size:24px"> phone No :</td>
	
		<td><input type="text" name="phoneno" style="font-size:20px" height="50" width="50" onKeyDown="return onlyNumbers(event);" required /></td>
</tr>
	
<tr><td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Register Now" style="font-size:24px"/></td>
		<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="reset" value="Cancle"  style="font-size:24px"/></td></tr>
</form>
</table>
</div>
</section>
</div>

<?php include "footer.php"; ?>






	

	
	