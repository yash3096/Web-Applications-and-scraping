<?php require_once("../admin.php");
$obj=new admin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="admin"><!--start admin-->
<br/><br/>
<div id="login-admin">

<form action="../../request-process.php" method="post">
<h3>Welcome Admin </h3><input type="submit" name="submit" value="Logout"  style="background-color:#66CCCC"/>
<input type="hidden" name="action" value="logout" />
</form></div>
<br/><br/>

<a href="function.php?req=addproduct">Add Product</a> | <a href="function.php?req=viewproduct&start=0">View Product</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<a href="function.php?req=viewcontact">View Contact</a><br/><br/>
<?php
	if(isset($_GET['req']))
	{
		if($_GET['req']=="addproduct")
		{
			echo "<form action=\"../../request-process.php\" method=\"post\" enctype=\"multipart/form-data\">";
			echo "<table>";
			echo "<tr><td>Product Name</td><td><input type=\"text\" name=\"pname\" class=\"width300\"/></td></tr>";
			echo "<tr><td>Product Type</td><td><select name=\"product-type\"><option value=\"1\">Telecom Products</option><option value=\"2\">Conferencing Integration Products</option><option value=\"3\">CCTV Camera Surveillance Products</option><option value=\"4\">Paging/Pipeline Music Products</option></select>"; 
			echo "<tr><td>Product Detail</td><td><textarea name=\"detail\" class=\"width300\"></textarea></td></tr>";
			echo "<tr><td>Upload File</td><td><input type=\"file\" name=\"file\"/></td></tr>";
			echo "<tr><td>width</td><td><input type=\"text\" name=\"width\"></td></tr>";
			echo "<tr><td>Height</td><td><input type=\"text\" name=\"height\"></td></tr>";
			echo "<tr><td></td><td><input type=\"submit\" name=\"submit\" value=\"Upload\" /></td></tr>";
			echo "<input type=\"hidden\" name=\"action\" value=\"addproduct\" />";
			echo "</form>";
			echo "</table>";
		}
	
		else if($_GET['req']=="viewproduct")
		{
			$start1=$_GET['start'];
			echo $obj->viewproductforadmin($start1);
		}
		else if($_GET['req']=="editproduct")
		{
			$pid=$_GET['id'];
			$prod=Array();
			$prod=$obj->editproduct($pid);
			
			echo "<form action=\"../../request-process.php\" method=\"post\" enctype=\"multipart/form-data\">";
			echo "<br/><br/><table>";
			echo "<tr><td>Product Name</td><td><input type=\"text\" name=\"pname\" value=\"".$prod['name']."\" class=\"width300\"></td></tr>";
			echo "<tr><td>Product Type</td><td><select name=\"product-type\">";	
				if($prod['ptype']==1)
				{ 
				  echo "<option value=\"1\" selected=\"selected\">Telecom Products</option><option value=\"2\">Conferencing Integration Products</option><option value=\"3\">CCTV Camera Surveillance Products</option><option value=\"4\">Paging/Pipeline Music Products</option></select></td></tr>";
				}
				else if($prod['ptype']==2)	
				{
				   echo "<option value=\"2\" selected=\"selected\">Conferencing Integration Products</option><option value=\"1\">Telecom Products</option><option value=\"3\">CCTV Camera Surveillance Products</option><option value=\"4\">Paging/Pipeline Music Products</option></select></td></tr>";
				}   
				else if($prod['ptype']==3)
				{
				  echo "<option value=\"3\" selected=\"selected\">CCTV Camera Surveillance Products</option><option value=\"1\">Telecom Products</option><option value=\"2\">Conferencing Integration Products</option><option value=\"4\">Paging/Pipeline Music Products</option></select></td></tr>";
				}
				else if($prod['ptype']==4)	
				{			  
				   echo "<option value=\"4\" selected=\"selected\">Paging/Pipeline Music Products</option><option value=\"3\">CCTV Camera Surveillance Products</option><option value=\"1\">Telecom Products</option><option value=\"2\">Conferencing Integration Products</option></select></td></tr>";
				}  
			
			echo "<tr><td>Product Detail</td><td><textarea name=\"detail\" class=\"width300\">".$prod['detail']."</textarea></td></tr>";
			echo "<tr><td>Picture</td><td><img src=\"../../".$prod['path']."\" width=\"".$prod['width']."\" height=\"".$prod['height']."\"></td></tr>";
			echo "<tr><td>width</td><td><input type=\"text\" name=\"fwidth\" value=\"".$prod['width']."\" ></td></tr>";
			echo "<tr><td>Height</td><td><input type=\"text\" name=\"fheight\" value=\"".$prod['height']."\"></td></tr>";
			echo "<tr><td>Change Picture</td><td><input type=\"file\" name=\"file\"/></td></tr>";
			echo "<tr><td></td><td><input type=\"submit\" name=\"submit\" value=\"Update\" /></td></tr>";
			echo "<input type=\"hidden\" name=\"action\" value=\"updateproduct\" />";
			echo "<input type=\"hidden\" name=\"pid\" value=\"".$prod['pid']."\">";
			echo "<input type=\"hidden\" name=\"fid\" value=\"".$prod['fid']."\">";
			echo "</form>";
			echo "</table>";
		}
			
		else if($_GET['req']=="deleteproduct")
		{
			$pid=$_GET['pid'];
			$fid=$_GET['fid'];
			$prod=$obj->deleteproduct($pid);
			$file=$obj->deletefile($fid);
			echo "<br/><br/>";
			if($prod=="true"&&$file=="true")
			{
				echo "product & picture deleted";
			}
			else if	($prod=="false"&&$file=="true")
			{
				echo "picture deleted";
			
			}
			else if	($prod=="true"&&$file=="false")
			{
				echo "product deleted";
			
			}
			else
			{
				echo "Product & picture not deleted";
			}	
		}
		
		else if($_GET['req']=="viewcontact")
		{
			echo $obj->viewcontactforadmin();
		}
  }
?>
</div><!--End admin-->
</body>
</html>
