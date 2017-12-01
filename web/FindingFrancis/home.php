<?php
	session_start();
	if(!isset($_SESSION["id"]))
	{
		header("Location: login.php");
	}
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
			ul li a{
				text-decoration: none;
				
			}
			ul li{
				display: inline;
			}
			
			#menu{
				padding-left:20px;
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
	</head>

	<body>
		<div>
			<div class="header">
				<span>Welcome <?= $_SESSION["username"] ?></span>
				<a href="logout.php">Logout</a>
			</div>
			<div>
				<img width="100%" height="200" src="images/dead_pool_yo.jpeg" /><br /><br />
			</div>
			<!--
			<?= $_SESSION["profile_pic"]?>
						<div align="center">
							<img width="50px" height="50px" src="<?= '../../../../'.$_SESSION["profile_pic_path"]?>" />
							<!--C:\xampp\htdocs\FindingFrancis\home.php-->
						</div>
						
			<div id="menu">
				<ul>
					<li>
						<a href="friends.php">Friends</a>
						<a href="findings.php">Find francis</a>
					</li>
				</ul>
				
			</div>
		</div>
	</body>
</html>
