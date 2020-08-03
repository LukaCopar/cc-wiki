<?php 
	require 'connection.php';
	$lmao = $pdo->query("SELECT * FROM heros");
	while($xd = $lmao->fetch()) {
		echo '<div class="card hero">
			<p>'. $xd['name'] .'</p>
			<img src="'. $xd['img_url'] .'" alt="jah pac ni slike">
		</div>';
	}

	
?>