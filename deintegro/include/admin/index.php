<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
if(isset($_GET['req']))
{
	if($_GET['req']=="msg")
	{
	echo "Username and password are invalid";
	}
}
?>
<div id="admin"><!--start admin-->
<br/><br/>
<table><form action="../../request-process.php" method="post">
<tr><td>Email Id</td><td><input type="text" name="email" /></td></tr>
<tr><td>Password</td><td><input type="password" name="password" /></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Login" /></td></tr>
<input type="hidden" name="action"  value="login" />
</form></table>
</div><!--End admin-->
</body>
</html>
