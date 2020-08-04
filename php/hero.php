<?php 
	require 'connection.php';
	$lmao = $pdo->query("SELECT * FROM heros");
	while($xd = $lmao->fetch()) {
		echo '<div class="card hero">
			<h4>'. $xd['name'] .'</h4>
			<img src="'. $xd['img_url'] .'" alt="jah pac ni slike">
		</div>';
	}

	


































