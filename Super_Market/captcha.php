<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
		session_start();
		$a="AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789";
		
		$str="";
		
		for($i=1;$i<=6;$i++)
		{
				$str.=substr($a,rand(0,strlen($a)-1),1);
		}
		//echo $str;
		$_SESSION['capstr']=$str;
		$img=imagecreate(190,50);
		imagecolorallocate ($img,rand(0,225),rand(0,225),rand(0,225));
		$font_color=imagecolorallocate($img,255,255,255);
		
		$font="chunkfive-webfont.ttf";
		imagettftext($img,26,5,10,36,$font_color,$font,$str);
		
		header ("content-type:image/jpeg");
		
		//for save the image give the path
		//imagejpeg($img,"path");
		imagejpeg($img);
		imagedestroy($img);
?>