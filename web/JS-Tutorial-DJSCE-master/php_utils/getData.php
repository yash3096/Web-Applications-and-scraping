<?php 
	include('conn.php');
	
	$sqldata = mysqli_query($conn, "SELECT * FROM `prioritylist` ORDER BY `plevel` DESC");
	$rows = array();
	$count=0;
	while($r = mysqli_fetch_assoc($sqldata)){
		$rows[$count++] = $r;
	}
	echo json_encode($rows);

 ?>