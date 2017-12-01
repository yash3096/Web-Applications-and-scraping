<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>login</title>
		<meta name="description" content="">
		<meta name="author" content="Yash">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<style type="text/css">
			.error{
				color: red;
			}
		</style>
		<style type="text/css">
			.header{
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
	</head>

	<body>
		<?php
			//h is for 12 hour format H is for 24 hour format
			$hour = intval(date("H"));
			$greeting = "";
			if ($hour >= 0 and $hour <12){
				$greeting = "Good Morning";
			}
			else if($hour >= 12 and $hour <16){
				$greeting = "Good Afternoon";
			}
			else{
				$greeting = "Good Evening";
			}
		?>
		<div align="center">
			<h2>
				<i>(<?php echo $greeting; ?>)</i>Login here
			</h2>
			<img width="1000" height="200" src="images/dead_pool_yo.jpeg" /><br /><br />
			<div id="menu">
				<ul>
					<li type="none">
						<a href="shoes.php">buy merchandise</a>
					</li>
				</ul>
				
			</div>
			<fieldset>
				<form action="auth.php" method="post">
						<input placeholder="Username" name="username"/><br/><br />
						<input placeholder="Password" name="password" type="password"/> <br/><br/>
						<input type="submit" value="Login" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="html/register.html">Register</a>
				</form>
				<?php
					if (isset($_GET["error"])){
				?>
					<span class="error">Invalid Username/Password</span>
				<?php
					}
				?>
			</fieldset>
		</div>
	</body>
</html>
