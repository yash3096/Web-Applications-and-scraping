<!--
//cookie call should be before any html tag
-->
<?php
	$hoodie=$_POST["hoodie"];
	if(isset($_COOKIE["sh"]))
	$shoes=$_COOKIE["sh"];
	
	setcookie("sh","",time() - 60*60*24*1);//DESTROY COOKIE ON THE BROWSER
	
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
				<h3 style="display: inline">Your Cart</h3>
				<input type="submit" value="Confirm"/><br /><br />
				<table border="1px" cellpadding="10">
					<tr>
						<td>
							Shoes
						</td>
						<td>
							<?php
								$src="images/dead_pool_shoes$shoes.jpeg";
							?>
							<img src="<?= $src ?>" />
							
						</td>
					</tr>
					<tr>
						<td>
							Hoodie
						</td>
						<td>
							<?php
								$src="images/dead_pool_hoodie$hoodie.jpeg";
							?>
							<img src="<?= $src ?>" />
						</td>
					</tr>
					
				</table>
			</div>
	</body>
</html>
