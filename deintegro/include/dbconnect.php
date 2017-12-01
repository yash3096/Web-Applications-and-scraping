<?php
	class dbconnect
	{
	
		private $con;
		private $mysqli;
		
		function __construct()
		{
			
			
			$this->mysqli=mysqli_init();
			
/*Local	*/
			$this->mysqli=mysqli_connect("localhost","deintegro_user","SDJbvc37ig*hSJK","deintegro_web")or die("Query Failed: Unable to connect");			
			$this->con=mysql_connect("localhost","deintegro_user","SDJbvc37ig*hSJK") or die("Query Failed : Unable to connect");
			mysql_select_db("deintegro_web") or die("Query failed:Select database");

	


/*Server
			$this->mysqli=mysqli_connect("localhost","gen_user","gen_P@ssw0rd","general")or die("Query Failed: Unable to connect");			
			$this->con=mysql_connect("localhost","gen_user","gen_P@ssw0rd") or die("Query Failed : Unable to connect");
			mysql_select_db("general") or die("Query failed:Select database");*/
		}
		
		function getconnect()
		{
			return $this->con;
		}
		
		function mysqliconnect()
		{
			return $this->mysqli;
		}	
			
   }
?>