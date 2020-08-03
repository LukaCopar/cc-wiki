<?php
	require 'connection.php';
	$lmao = $pdo->query("SELECT * FROM talents");
	while($xd = $lmao->fetch()) {
		echo '<div class="card" style="width: 200px">
			<h4>'. $xd['name'] .'</h4>
			<p>'.$xd['description'].'</p>
		</div>';
	}

?>	