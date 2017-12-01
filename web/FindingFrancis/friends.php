<?php
	session_start();
	// this is to restrict any unauthenticated user to enter into login pages and 
	//guard those pages from it by using method isset on session variables like id in this case
	//guard against directly accessing the internal urls
	  
	if(!isset($_SESSION["id"]))
	{
		header("Location: login.php");
	}
	$id=$_SESSION["id"];
   $conn = new mysqli("localhost","root","","find_francis");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later". $conn->connect_error;
   }
   else{
   	$query = "select * from users where id!=$id order by username";
	   $result = $conn -> query($query);
   }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<style type="text/css">
			#header{
				float: right;
				padding-right: 10px;
			}
			ul li a{
				text-decoration: none;
			}
			
			#menu{
				padding-left:20px;
			}
		</style>

		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>register</title>
		<meta name="description" content="">
		<meta name="author" content="Yash">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<div id="header">
			<span>Welcome <?= $_SESSION["username"] ?></span>
			<a href="logout.php">Logout</a>
		</div>
		<div align="center">
			<img width="100%" height="200" src="images/dead_pool_yo.jpeg" /><br/>
		</div>
		<div id="menu">
			<ul>
				<li>
					<a href="friends.php">Friends</a>
				</li>
			</ul>
		</div>
		<?php
			if($result -> num_rows > 0){
		?>		
			<table border="1">
				<?php
				 while($row = $result -> fetch_assoc()) {
				 		
				 	//fetch_assoc() is a method on object result which increses row pointer of associative array of database records by 1 , initially the row pointer is -1
				 ?>	
						<tr>
							<td><?= $row["username"] ?></td>
							<td><?= $row["gender"] ?></td>
							<td><?= $row["country"] ?></td>
						</tr>	
				<?php
					 }
				?>
			</table>	
		<?php
				
			}
			else{
		?>		
			<h3>No Friends Dude! Life is Tough</h3>
		<?php
			}
		?>
	</body>
</html>
