<?php
require 'connection.php';
$lmao = $pdo->query("SELECT * FROM heros");


while ($xd = $lmao->fetch()) {
	$skill1 = $pdo->query('SELECT * FROM hero_skills WHERE hero_id = '.$xd['id'].'');
	$skill = $skill1->fetch();
	$skill_img = $skill['img_url'] ?? 'no image';

	// if (isset($skill['img_url']))
	// 	$skill_img = "../img/maelstrom.png";

	if (isset($xd['img_url'])) {
		$xd['img_url'] = "../img/zephyrica1.png";
	}
	echo '
	<form class="hero-open" target="_blank" action="./php/hero.php?hero=' . $xd['id'] . '"> 
	<div class="hero">
			<img class="hero-card-img" src="' . $xd['img_url'] . '" alt="jah pac ni slike">
			<div><img class="hero-skill-img" src="' . $skill_img . '"/><h4  class="hero-name"> ' . $xd['name'] . ' </h4></div>
		</div>
		</form>
		';
}
