<?php
require 'connection.php';
$lmao = $pdo->query("SELECT * FROM heros");

$lvl = 1;
$heroes = [];
while ($xd = $lmao->fetch()) {
	$skill1 = $pdo->query('SELECT * FROM hero_skills WHERE hero_id = '.$xd['id'].';');
	$skills = [];
	$skill_img;
	while($skils = $skill1->fetch()) {
		$skill = new \stdClass();
		$skill->name = $skils['name'];
		$skill->desc = $skils['description'];
		$skill->level = $skils['level'];

		array_push($skills, $skill);
	}
	$skill_img = $skils['img_url'] ?? 'no image';
	$q = $pdo->query("SELECT * FROM hero_lvl WHERE hero_name = '". str_replace("'", "\'", $xd['name']) ."';");
	$maxLvl = $q->fetch();
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
	$hero->biography = $xd['biography'];
	$hero->img_url = $xd['img_url'];
	$hero->img_url_evo = $xd['img_url_evo'];
	$hero->skill = $skills;
	//$hero->warden = $xd['warden'];
	$hero->mov_spd = $xd['move_spd'];
	$hero->atk_spd = $xd['atk_speed'];
	$hero->atk_range = $xd['attack_range'];
	$hero->atk = $maxLvl['attack'];
	$hero->hp = $maxLvl['hp'];
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