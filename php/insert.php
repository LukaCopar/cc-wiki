<?php
	require 'connection.php';
	$conn = OpenCon();
	$query="INSERT INTO `heros`(`id`, `Name`, `biography`, `skill_id`, `img_url`, `img_url_evo`, `warden_id`, `move_spd`, `atk_speed`) VALUES ([],[],[],[],[],[],[],[],[])"
	$test = "SELECT * FROM traits;";
	$result = $conn->query($test);
	echo($result->fetch_assoc()["amount"]);
	CloseCon($conn);
?>