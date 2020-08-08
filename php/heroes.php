<?php
require 'connection.php';
$lmao = $pdo->query("SELECT * FROM heros");

$lvl = 1;
$heroes = [];
while ($xd = $lmao->fetch()) {
	$skill1 = $pdo->query('SELECT * FROM hero_skills WHERE hero_id = '.$xd['id'].' AND level = '.$lvl.'');
	$skill = $skill1->fetch();
	$skill_img = $skill['img_url'] ?? 'no image';

	// if (isset($skill['img_url']))
	// 	$skill_img = "../img/maelstrom.png";

	if (isset($xd['img_url'])) {
		$xd['img_url'] = "../img/zephyrica1.png";
	}

	$hero  = new \stdClass();
	$hero->id = $xd['id'];
	$hero->name = $xd['name'];
	$hero->img_url = $xd['img_url'];
	$hero->skill_img = $skill_img;
	array_push($heroes, $hero);
	/*echo '
	<form class="hero-open" target="_blank" action="./php/hero.php?hero=' . $xd['id'] . '"> 
	<div class="hero">
			<img class="hero-card-img" src="' . $xd['img_url'] . '" alt="jah pac ni slike">
			<div class="hero-name-skil"><img class="hero-skill-img" src="' . $skill_img . '"/><h4  class="hero-name"> ' . $xd['name'] . ' </h4></div>
		</div>
		</form>
		';*/

}
$JSON = json_encode($heroes);
echo $JSON;