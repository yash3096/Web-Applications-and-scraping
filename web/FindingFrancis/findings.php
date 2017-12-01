<?php
	session_start();
	if(!isset($_SESSION["id"]))
	{
		header("Location: login.php");
	}
		if (isset($_GET["error"])){
	?>
			<span class="error">Invalid Username/Password</span>
	<?php
		}
  
  
  /*
   $id=$_SESSION["id"];
     $conn = new mysqli("localhost","root","","find_francis");
     if ($conn -> connect_error){
         echo "Error connecting please try again later". $conn->connect_error;
     }
     else{
         $query = "select * from findings where user_id=$id order by id desc";
         $result = $conn -> query($query);
     }
   */
  
				?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<style type="text/css">
			.header{
				float: right;
				padding-right: 10px;
			}
			ul li{
				display: inline;
			}
			ul li a{
				text-decoration: none;
			}
			
			#menu{
				padding-left:20px;
			}
			#form{
				display: inline;
			}
			#list{
				display: inline;
			}
		</style>
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>home</title>
		<meta name="description" content="">
		<meta name="author" content="Yash">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
	</head>

	<body>
		<div class="container-fluid">
			<div class="header">
				<span>Welcome <?= $_SESSION["username"] ?></span>
				<!--dynamic image-->
				<img src="get_pic.php" width="60" height="60"/>
				<a href="logout.php">Logout</a>
			</div>
			<div>
				<img width="100%" height="200" src="images/dead_pool_yo.jpeg" /><br /><br />
			</div>
			<div id="menu">
				<ul>
					<li>
						<a href="friends.php">Friends</a>
						
					</li>
					<li>
						<a href="#">Find francis</a>
					</li>
				</ul>
				
			</div>
		</div>
		
		<div  class="row" >
			<div class="col-xs-4">
				<div id="form">
						<p>
							<input name="age" data-bind="value:age" placeholder="Approx Age" />
						</p>
						<p>
							<input name="height" data-bind="value: height" placeholder="Approx Height" />
						</p>
						<p>
							<textarea name="address" data-bind="value: address" placeholder="Address Spot"></textarea>
						</p>
						<p>
							<button data-bind="click: onSave">Save</button>
						</p>	 
				</div>	
			</div>
		
			<div class="col-xs-8">
					<div id="list">
						<table class="table table-striped table-hover table-bordered">
							<thead>
								<tr>
									<th>Age</th>
									<th>Height</th>
									<th>Address</th>
								</tr>
								<tbody data-bind="foreach: findings">
									<tr>
										<td data-bind="text: age"></td>
										<td data-bind="text: height"></td>
										<td data-bind="text: address"></td>
									</tr>
								</tbody>
							</thead>
							<tbody>									
							</tbody>	
						</table>
					</div>
			</div>
		</div>
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/knockout-3.4.0.js"></script>
		<script src="js/findings.js"></script>
	</body>
</html>
