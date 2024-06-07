<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header.php";
include "connection.php";

	echo $Name = $_REQUEST['name'];
	$path = $_FILES['image']['name'];
	//echo $path;
	if($path!="")
	{
	//$new_file_name=$Name.".";
	//$path="image/".$new_file_name; 
	
	$new_file_name=$path;
	$path= "../web image/".$path; 
//	echo $path;
//	exit();

move_uploaded_file($_FILES['image'] ['tmp_name'],$path);
	}
		

if(isset($_POST['submit']))
{
	
$insert=(mysqli_query($link,"insert into catalogue(c_nm,c_image)values('$Name','$new_file_name')"));
		if($insert)
			$msg='Catalogue has been added successfully';
		else
			$msg='Catalogue has not been added successfully';
	}
	
	header("Location:catalogue.php?msg=$msg");

include "footer.php";
?>