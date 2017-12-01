<?php
  	session_start();
	$pic_path=$_SESSION["profile_pic"];
	//read the contents of the path
	$contents=file_get_contents($pic_path);
	
	//content type is defined in http protocol to tell browser that what type of data is being sent to datatype
	header("Content-Type: image/jpg");
	//sends the content to img tag (to browser)
	echo $contents;
?>