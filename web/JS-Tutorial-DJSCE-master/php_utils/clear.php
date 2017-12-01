<?php 
	include("conn.php");
	
	if(isset($_POST)){
		extract($_POST);
		$sqlretr = mysqli_query($conn, "TRUNCATE TABLE  `prioritylist`");
		if($sqlretr){
			return json_encode(array('success' => 1));;
		}else{
			return json_encode(array('error'=> 0));
		}
	}
 ?>