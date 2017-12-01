<?php
	session_start();
	if(!isset($_SESSION["id"]))
	{
		header("Location: login.php");
	}
	
	$id=$_SESSION["id"];
	$age=$_POST["age"];
	$height=$_POST["height"];
	$address=$_POST["address"];
	
		$conn = new mysqli("localhost","root","","find_francis");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later". $conn->connect_error;
   }
   else{
   	$insert_query= "insert into findings(age,height,address,user_id) values ('$age','$height','$address','$id')";
	   if($conn -> query($insert_query) === TRUE){
				//it is used to redirect to some other page its an in built funtion syntax should always be Location: l caps and no space before :
				/*header("Location: findings.php");*/
				//header("Location: home.php");
				echo "1";
			}
			else {
				/*header("Location: findings.php?error=1");*/
				echo "-1";
			}
   }
?>