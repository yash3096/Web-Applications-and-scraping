<?php
session_start();
	require_once("include/admin.php");
	$obj=new admin();
	
	
	function getFileExtension($filename)
	{
		return substr($filename,strrpos($filename, '.'));
	}
	
	if(isset($_POST['action']))
	{
		if($_POST['action']=="addproduct")
		{
			if(isset($_FILES['file']['name']))
				{
					if($_FILES['file']['error']==0 && (strtolower(getFileExtension($_FILES['file']['name']))==".gif" || strtolower(getFileExtension($_FILES['file']['name']))==".jpg" || strtolower(getFileExtension($_FILES['file']['name']))==".jpeg" || strtolower(getFileExtension($_FILES['file']['name']))==".png" ))
					{
							$target = "image/uploadDir/";
							$target = $target.rand().$_FILES['file']['name'];
						if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
						{
								
								$product=Array();								
								$product['name']=htmlentities(strip_tags($_POST['pname']),ENT_QUOTES);
								$product['detail']=htmlentities(strip_tags($_POST['detail']),ENT_QUOTES);
								$product['type']=strip_tags($_POST['product-type']);
								$fheight=strip_tags($_POST['height']);
								$fwidth=strip_tags($_POST['width']);
								$pid=$obj->uploadClientFile($target,$_FILES['file']['name'],$_FILES['file']['type'],$fheight,$fwidth);
								$product['id']=$pid;
								$obj->productdetail($product);
								header("Location:include/admin/function.php?req=addproduct");
						}
					}
				}
				#END Intro File Upload
		}
		
		else if($_POST['action']=="updateproduct")
		{
				$prod=Array();
				$prod['name']=strip_tags($_POST['pname']);
				$prod['detail']=strip_tags($_POST['detail']);
				$prod['pid']=strip_tags($_POST['pid']);
				$prod['fid']=strip_tags($_POST['fid']);
				$prod['ptype']=strip_tags($_POST['product-type']);
				$obj->updateproduct($prod);
				$file=Array();
				$file['fid']=strip_tags($_POST['fid']);
				$file['width']=strip_tags($_POST['fwidth']);
				$file['height']=strip_tags($_POST['fheight']);
				$obj->updatehwforpic($file);
				if(isset($_FILES['file']['name']))
				{
						if($_FILES['file']['error']==0 && (strtolower(getFileExtension($_FILES['file']['name']))==".gif" || strtolower(getFileExtension($_FILES['file']['name']))==".jpg" || strtolower(getFileExtension($_FILES['file']['name']))==".jpeg" || strtolower(getFileExtension($_FILES['file']['name']))==".png" ))
					{
								$target = "image/uploadDir/";
								$target = $target.rand().$_FILES['file']['name'];
								if(move_uploaded_file($_FILES['file']['tmp_name'],$target))
								{
									
								
										$file=Array();
									$file['name']=$_FILES['file']['name'];
									$file['type']=$_FILES['file']['type'];
									$file['path']=$target;
									$file['fid']=strip_tags($_POST['fid']);
									$file['width']=strip_tags($_POST['fwidth']);
									$file['height']=strip_tags($_POST['fheight']);
								 	$obj->updatefile($file);
								}
						}
				}
			header("Location:include/admin/function.php?req=viewproduct");
		}
		else if($_POST['action']=="contactus")
		{
			$contact=Array();
			$contact['name']=$_POST['cname'];
			$contact['ceid']=$_POST['ceid'];
			$contact['phoneno']=$_POST['cno'];
			$contact['msg']=$_POST['cmsg'];
			$contact['company']=$_POST['company'];
			$contact['address']=$_POST['addr'];
			$contact['country']=$_POST['country'];
			$obj->contact($contact);
			header("Location:contactus.php?req=ok");	
		
		}
		else if($_POST['action']=="login")
		{
			$emailid=strip_tags($_POST['email']);
			$password=strip_tags($_POST['password']);
			if($emailid=="info@deintegro.de" && $password="password")
			{
				$_SESSION['email']=$emailid;
				header("Location:include/admin/function.php");
			}
			else
			{
				header("Location:include/admin/index.php?req=msg");
			
			}	
		}
		else if($_POST['action']=="logout")
		{
			
			session_destroy();
			header("Location:include/admin/index.php");
			
		}
	}
	
	
?>