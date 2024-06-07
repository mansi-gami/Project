<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header.php";
include "connection.php";
echo $Name = $_REQUEST['name'];
echo $c_id = $_REQUEST['c_id'];
	
	
	$path = $_FILES['image']['name'];
	echo $path;
	if($path!="")
	{
	//echo "hello";
	//$new_file_name=$Name.".";
	//$path="image/".$new_file_name; 
	
	$new_file_name=$path;
	$path= "../web image/".$path; 

move_uploaded_file($_FILES['image'] ['tmp_name'],$path);
	}
		
	
	
if(isset($_POST['submit']))
{
	
$insert=(mysqli_query($link,"insert into subcatalogue(c_id,s_nm,s_img)values('$c_id','$Name','$new_file_name')"));
		if($insert)
			$msg='Subcatalogue has been added successfully';
		else
			$msg='Subcatalogue has not been added successfully';
	}
	
	header("Location:subcatalogue.php?msg=$msg & c_id=$c_id");
?>
<?php
include "footer.php";
?>