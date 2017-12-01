<?php
	require_once("dbconnect.php");
	
		class admin
		{
			private $con;
			private $mysqlicon;
			
			function __construct()
			{
				$obj = new dbconnect();
				$this->con=$obj->getconnect();
				$this->mysqlicon=$obj->mysqliconnect();
			}
			
			function uploadClientFile($target,$filename,$filetype,$fheight,$fwidth)
			{
				$status=1;
				
				$stmt = $this->mysqlicon->prepare("insert into d_file(file_name,file_path,file_type,fstatus,width,height) values(?,?,?,?,?,?)");
				
				$stmt->bind_param('sssiii',$filename,$target,$filetype,$status,$fwidth,$fheight);
				$stmt->execute();
				$stmt->close();
				return mysqli_insert_id($this->mysqlicon);
						
				/*$query="insert into d_file(file_name,file_path,file_type,fstatus)";
				$query=$query."values('".$filename."',";
				$query=$query."'".$target."',";
				$query=$query."'".$filetype."',";
				$query=$query.$status.")";
				$result=mysql_query($query,$this->con) or die("Query failed : UploadclientFile"); 
				return mysql_insert_id();*/
			}
			
			
			function productdetail($product)
			{
				$status=1;
				
				$stmt=$this->mysqlicon->prepare("insert into d_product(prod_name,prod_detail,prod_id,pstatus,prod_type) values(?,?,?,?,?)");
				$stmt->bind_param('ssiis',$product['name'],$product['detail'],$product['id'],$status,$product['type']);
				$stmt->execute();
				$stmt->close();
				return true;
				/*
				$status=1;
				$query="insert into d_product(prod_name,prod_detail,prod_id,pstatus,prod_type)";
				$query=$query."values('".$product['name']."',";
				$query=$query."'".$product['detail']."',";
				$query=$query."'".$product['id']."',";
				$query=$query.$status.",";
				$query=$query."'".$product['type']."')";
				$result=mysql_query($query,$this->con) or die("Query Failed:ProductDetail");
				if(isset($result))
				{
				 	return true;
				}
				else
				{
					return false;
				}*/
			}
			
			function product()
			{
				$query="select * from d_file";
				$result=mysql_query($query,$this->con);
				$value="";
				$value="<table><tr>";
				while($row=mysql_fetch_row($result))
				{
					$value=$value."<table><tr><td>File name </td><td>".$row[1]."</td></tr>";
					$value=$value."<tr><td>Pictrue </td><tr><td><img src=\"".$row[2]."\"></td></tr></table></tr></table>" ;
				}
				return $value;
			}
			
			//view Product for Admin
			function viewproductforadmin($start1)
			{
				$page_name="function.php?req=viewproduct";
				$start=$start1;
				if(strlen($start)>0 and !is_numeric($start))
				{
					exit;				
				}
				$eu=($start-0);
				$limit=10;
				$next=$eu+$limit;
				$this1=$eu+$limit;
				$back=$eu-$limit;
				
				$query2="select * from d_product";
				$result2=mysql_query($query2,$this->con);
				$nume=mysql_num_rows($result2);
				
				$query="select p.prod_name,p.prod_detail,f.file_name,f.file_path,f.file_type,f.id,p.id,f.width,f.height,p.pstatus ,p.prod_type from d_file f join d_product p on p.prod_id=f.id limit $eu, $limit"; 
				$result=mysql_query($query,$this->con) or die("Quer failed:View product");
				$value="";
				$value=$value."<table border=\"1\"><tr><td>Product Id</td><td>File Id</td><td>Product name </td><td>Product Detail </td><td>File Name </td><td>Picture</td><td>Status</td><td>File type</td></tr>";
				
				while($row=mysql_fetch_row($result))
				{
					$status="";
					if($row[9]==0)
					{
						$status="<font color=\"yellow\">Pending</font>";
					}
					else if($row[9]==1)
					{
						$status="<font color=\"green\">Confirmed</font>";
					}
					else if($row[9]==2)
					{
						$status="<font color=\"red\">Deleted</font>";
					}	
					
					$catg="";
					if($row[10]==1)
					{
						$catg="telecom product";
					}		
					else if($row[10]==2)
					{
						$catg="conferencing product";					
					}
					else if($row[10]==3)
					{
						$catg="cctv camrea product";					
					}
					
					else if($row[10]==4)
					{
						$catg="music product";					
					}
					
					$value=$value."<tr><td>".$row[6]."</td>";
					$value=$value."<td>".$row[5]."</td>";
					$value=$value."<td>".$row[0]."</td>";
					$value=$value."<td>".$row[1]."</td>";
					$value=$value."<td>".$row[2]."</td>";
					$value=$value."<td><img src=\"../../".$row[3]."\" width=\"".$row[7]."\" height=\"".$row[8]."\"></td><td>$status</td>";
					$value=$value."<td>".$row[4]."</td><td>".$catg."</td><td><a href=\"function.php?req=editproduct&id=".$row[6]."\">Edit</a></td><td><a href=\"function.php?req=deleteproduct&pid=".$row[6]."&fid=".$row[5]."\">Delete</a></td></tr>";
				}
	
				$value=$value."</table>";
				
				$value=$value."<table align = 'center' width='100%'><tr><td align='left' width='10%'>";
				if($back >=0)
					{
						$value=$value. "<a href='$page_name&start=$back'><font face='Verdana' size='2'>PREV</font></a>";
					}	
					
					$value=$value. "</td><td align=center width='30%'>";
					$i=0;
					$l=1;
					for($i=0;$i < $nume;$i=$i+$limit)
					{
						if($i <> $eu)
						{
							$value=$value. " <a href='$page_name&start=$i'><font face='Verdana' size='2'>$l</font></a> ";
						}
						else 
						{
							$value=$value. "<font face='Verdana' size='4' color=red>$l</font>";
						}
					$l=$l+1;
				  } /// Current page is not displayed as link and given font color red
					
						$value=$value. "</td><td align='right' width='30%'>";
						if($this1 < $nume) 
						{
							$value=$value. "<a href='$page_name&start=$next'><font face='Verdana' size='2'>NEXT</font></a>";
						}
						$value=$value. "</td></tr></table>";
								
						return $value;
				}
			
			function editproduct($pid)
			{
				$query="select p.prod_name,p.prod_detail,p.id,f.file_path,f.id,.p.prod_type,f.width,f.height from d_file f join d_product p on f.id=p.prod_id where p.id=$pid"; 
				$result=mysql_query($query,$this->con) or die("Query failed:View product");
				$prod=Array();
				while($row=mysql_fetch_row($result))
				{
					$prod['name']=$row[0];
					$prod['detail']=$row[1];
					$prod['pid']=$row[2];
					$prod['path']=$row[3];
					$prod['fid']=$row[4];
					$prod['ptype']=$row[5];
					$prod['width']=$row[6];
					$prod['height']=$row[7];
				}
				return $prod;
			}
			
			function updateproduct($prod)
			{
				$stmt=$this->mysqlicon->prepare("update d_product set prod_name=?, prod_detail=?,prod_id=?, pstatus=1, prod_type=? where id=?");
				$stmt->bind_param('ssisi',$prod['name'],$prod['detail'],$prod['fid'],$prod['ptype'],$prod['pid']);
				$stmt->execute();
				$stmt->close();
				return true;
				
				/*$query="update d_product set prod_name='".$prod['name']."', prod_detail='".$prod['detail']."',prod_id=".$prod['fid'].", pstatus=1, prod_type= '".$prod['ptype']."' where id=".$prod['pid'];	
	 			$result=mysql_query($query,$this->con) or die("Query Failed : UpdateProduct");
				
				if(isset($result))
				{
					return true;
				}
				else
				{
					return false;
				}	*/
	 		}
			
			function updatefile($file)
			{
				$stmt=$this->mysqlicon->prepare("update d_file set file_name=?, file_type=?, file_path =?, width=?, height=?, fstatus=1 where id=?");
				$stmt->bind_param('sssiii',$file['name'],$file['type'],$file['path'],$file['width'],$file['height'],$file['fid']);
				$stmt->execute();
				$stmt->close();
		 		return true;
				
			/*$query="update d_file set file_name='".$file['name']."', file_type='".$file['type']."', file_path ='".$file['path']."', width=".$file['width'].", height=".$file['height'].", fstatus=1 where id=".$file['fid'];
				$result=mysql_query($query,$this->con) or die("Query Failed:Update File");
				if(isset($result))
				{
					return true;
				}
				else
				{
					return false;
				}*/
			}
			function updatehwforpic($file)
			{
				$stmt=$this->mysqlicon->prepare("update d_file set width=?, height=?, fstatus=1 where id=?");
				$stmt->bind_param('iii',$file['width'],$file['height'],$file['fid']);
				$stmt->execute();
				$stmt->close();
		 		return true;
			}
			
			function deleteproduct($pid)
			{
				$query="update d_product set pstatus=2 where id=$pid";
				$result=mysql_query($query,$this->con) or die("Query Failed:Delete Product");
				if(isset($result))
				{
					return true;
				}
				else
				{
					return false;
				}		
			}
			
			function deletefile($fid)
			{
				$query="update d_file set fstatus=2 where id=$fid";
				$result=mysql_query($query,$this->con) or die("Query Failed:Delete Product");
				if(isset($result))
				{
					return true;
				}
				else
				{
					return false;
				}	
			}
			
			//function for Product
			function viewproductlimit($cid)
			{
				$query="select p.id,f.file_path,f.id,p.prod_type,f.width,f.height from d_file f join d_product p on f.id=p.prod_id where p.prod_type=$cid and p.pstatus=1 order by f.file_path limit 4";
				$result=mysql_query($query,$this->con) or die("Query Failed : View Product");
				$value="";
				$value=$value."<table width=100%><tr>";
				while($row=mysql_fetch_row($result))
				{
					$value=$value."<td width=\"25%\"><img src=\"".$row[1]."\" width=\"".$row[4]."\" height=\"".$row[5]."\" style='padding:5px'></td>";
				}
				$value=$value."</tr></table>";
					return $value;
			}
			
			//function for ViewProduct for Categories
			function viewproduct($cid)
			{
				
				$query="select p.id,p.prod_name,p.prod_detail,f.file_path,f.id,p.prod_type,f.width,f.height from d_file f join d_product p on f.id=p.prod_id where p.prod_type=$cid and p.pstatus=1 order by p.prod_name";
				$result=mysql_query($query,$this->con) or die("query Failed : View Product");
				$value="";
				$value=$value."<table>";
				$photo=array();
				$i=0;
				while($row=mysql_fetch_row($result))
				{
						$photo['path'][$i]=$row[3];
						$photo['width'][$i]=$row[6];
						$photo['height'][$i]=$row[7];
						$i++;
				}

				$row=1;
				
				for($i=0;$i<count($photo['path']);$i++)
				{
					if($row==1)
					{
						$value.='<tr>';
					}
					
					$value.='<td width=\"30%\"><img src="'.$photo['path'][$i].'" width="'.$photo['width'][$i].'" height="'.$photo['height'][$i].'" /></td>';
					
					if($row==4)
					{
						$value.='</tr>';
						$row=0;
					}					
					$row++;
				}
				$value=$value."</table>";
				return $value;	
			}
			
			
			//function for contact
			function contact($contact)
			{
				$stmt=$this->mysqlicon->prepare("insert into d_contact (name,emailid,msg,phoneno,company,address,country) values(?,?,?,?,?,?,?)");
				$stmt->bind_param('sssssss',$contact['name'],$contact['ceid'],$contact['msg'],$contact['phoneno'],$contact['company'],$contact['address'],$contact['country']);
				$stmt->execute();
				$stmt->close();
				
				
		//		$header = "From: info@deintegro.de   <info@deintegro.de>\n";
		//ini_set('sendmail_from', 'info@deintegro.de');
//mail('rockcool19@gmail.com','subject',body',$header);
 
		mail('info@deintegro.de','De-Integro! - Web Enquiry',"Hello\nBelow is the web enquiry,\nName : ".$contact['name']."\nEmail Id : ".$contact['ceid']."\nPhone No. : ".$contact['phoneno']."\nMessage : ".$contact['msg']."\n\nThanks,\nWebmaster");
				return true;
			}
			
			//functio for View Contact for admin
			function viewcontactforadmin()
			{
				$query="select * from d_contact order by id desc";
				$result=mysql_query($query,$this->con);
				$value="";
				$value=$value."<table border=\"1\"><tr><td>Id</td><td>Name</td><td>Email Id</td><td>Message</td><td>Phone No</td></tr>";
				while($row=mysql_fetch_row($result))
				{
					$value=$value."<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
							
				}
				$value=$value."</table>";
				return $value;
			}	
							
	 }			
				



?>