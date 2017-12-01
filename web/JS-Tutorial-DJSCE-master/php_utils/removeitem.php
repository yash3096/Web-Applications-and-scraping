<?php 
	include("conn.php");
	if(isset($_POST)){
		extract($_POST);
		var_dump($_POST);
		$x =  intval($id);
		echo "primary_id php".$id;
		$q = "DELETE FROM `prioritylist` WHERE `id`='$x'";
		$sqlretr = mysqli_query($conn, $q);
		echo $q;
		// if($sqlretr){
		// 	echo json_encode(array('success' => 1));;
		// }else{
		// 	echo json_encode(array('error'=> 0));
		// }
	}
 ?>