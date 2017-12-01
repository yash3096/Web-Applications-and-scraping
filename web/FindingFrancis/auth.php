<?php
    //collect the username and password from the request
    //so use superglobal $_post and give it name of html tag of whose value u want to collect i.e. inside $_post we have the assosiative array key whose value  is to be retrieved
    // the parameter passed as name of html tag is thus available as key of associative array 
    $username = $_POST["username"];
	$password = $_POST["password"];
	
	//connect to db
	$conn = new mysqli("localhost","root","","find_francis");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later". $conn->connect_error;
   }
   else{
   	$query= "select * from users where username = '$username' and password = '$password'";
   	$result = $conn -> query($query);
	
	//num_rows
	if($result -> num_rows > 0){
		//valid user
		session_start();
		if($row = $result -> fetch_assoc())
		{
			$id=$row["id"];
			
			
			$_SESSION["id"] = $id;
			$_SESSION["username"]=$username;
			$_SESSION["profile_pic"]=$row["profile_pic_path"];
		}
		header("Location: home.php");
	}
	else{
	//invalid user
		header("Location: login.php?error=1");
	}
   }
?>