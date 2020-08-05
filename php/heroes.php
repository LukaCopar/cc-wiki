<?php
require 'connection.php';
$lmao = $pdo->query("SELECT * FROM heros");
while ($xd = $lmao->fetch()) {
	if (isset($xd['img_url'])) {
		$xd['img_url'] = "../img/zephyrica1.png";
	}
	echo '
	<button class="hero-open" value="./php/hero.php?hero=' . $xd['id'] . '"> 
	<div class="hero">
			<img class="hero-card-img" src="' . $xd['img_url'] . '" alt="jah pac ni slike">
			<h4>' . $xd['name'] . '</h4>
		</div>
		</button>
		';
}
