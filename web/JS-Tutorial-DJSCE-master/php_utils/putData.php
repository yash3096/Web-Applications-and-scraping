<?php 
	include("conn.php");
	if(isset($_POST)){
		extract($_POST);
		$sqlretr = mysqli_query($conn, "INSERT INTO `prioritylist`(`id`, `task`, `plevel`) VALUES (NULL, '$task', '$plevel')");
		if($sqlretr){
			// return array('success' => 1);;
			return "true";
		}else{
			return array('error'=> 0);
		}
	}
 ?>