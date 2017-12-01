<?php
	$shoes=$_POST["shoes"];
	setcookie("sh",$shoes,time()+60*60*24*1);
	//time is inbuilt function and gives time till now i.e. 0 and then add expiry time to cokkie so that you can save it for longer time
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
		<img width="100%" height="200" src="images/dead_pool_yo.jpeg" /><br /><br />
			<div id="menu">
				<ul>
					<li type="none">
						<a href="shoes.php">Buy merchandise</a>
					</li>
				</ul>
				
			</div>
		<div align="center">
			<form action="checkout.php" method="post">
				<h3 style="display: inline">Shoes</h3>
				<input type="submit" value="submit"/>
				<table border="1px">
					<tr>
						<td>
							<input type="radio" name="hoodie" value="1"/>
						</td>
						<td>
							<img src="images/dead_pool_hoodie1.jpeg" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="radio" name="hoodie" value="2"/>
						</td>
						<td>
							<img src="images/dead_pool_hoodie2.jpeg" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="radio" name="hoodie" value="3"/>
						</td>
						<td>
							<img src="images/dead_pool_hoodie3.jpeg" />
						</td>
					</tr>
					
				</table>
			</form>
		</div>
	</body>
</html>
