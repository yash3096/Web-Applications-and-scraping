<?php
    session_start();
	
	//clear the data that is stored in the session
	
	session_unset();//free all the session variables like "username", "id" which were created in the beginning of session
	
	session_destroy();
	
	header("Location: login.php");
?>