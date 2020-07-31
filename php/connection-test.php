<?php
	require 'connection.php';
	$conn = OpenCon();
	echo "Connected Successfully <br>";
	$test = "SELECT * FROM traits;";
	$result = $conn->query($test);
	//echo(var_dump($result));
	echo($result->fetch_assoc()["amount"]);
	CloseCon($conn);
?>