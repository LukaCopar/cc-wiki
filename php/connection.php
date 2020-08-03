<?php
	function OpenCon()
	{
		$dbhost = "192.168.1.12";
		$dbuser = "cc-wiki";
		$dbpass = "";
		$db = "cc-wiki";
		$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
		return $conn;
	}
	 
	function CloseCon($conn)
	{
		$conn -> close();
	}
	   
?>