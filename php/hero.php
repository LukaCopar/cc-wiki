<?php

require './connection.php';


$id = $_GET['hero'];
//echo ($_GET['hero']);
//$id = 1;


$query = 'SELECT * FROM heros WHERE (id = ' . $id . ')';
$lmao = $pdo->query($query);
$xd = $lmao->fetch();

$name = $xd['name'];
$biography = $xd['biography'];
//$skill_id = $xd['skill_id'];
$url1 = $xd['img_url'];
$url2 = $xd['img_url_evo'];
$warden_id = $xd['warden_id'];
$movspd = $xd['move_spd'];
$atkspd = $xd['atk_speed'];
$dodge = $xd['dodge'];
$crit = $xd['crit'];
$crit_resist = $xd['crit_resist'];
$crit_dmg = $xd['crit_dmg'];
$acc = $xd['acc'];


if (isset($xd['img_url'])) {
	$xd['img_url'] = "../img/zephyrica1.png";
}
$url1 = $xd['img_url'];

$query = 'SELECT * FROM hero_skills WHERE (hero_id = ' . $id . ')';
$lmao = $pdo->query($query);
$skill = $lmao->fetch();

//print_r($lmao);
$skill_lvl = 1;

//echo($_POST['skill_lvl']);

if (isset($_POST['skill_lvl']))
	$skill_lvl = $_POST['skill_lvl'];


//print_r($skill);
//echo ($skill['img_url'] . "xd");

// $query = 'SELECT * FROM wardens WHERE (id = ' . $warden_id . ')';
// $lmao = $pdo->query($query);
// $warden = $lmao->fetch();
//print_r($warden);
//echo("<br>");

$query = 'SELECT * FROM hero_lvl WHERE (hero_name = "' . strtolower($name) . '")';
$lmao = $pdo->query($query);
$hero = $lmao->fetch();
//print_r($warden);
//echo("<br>");

?>
	<div id="hero">
		<div class="hero1">

			<div class="hero_img">
				<img src="<?php echo ($url1);  ?>" alt="nema slike" />
				<hr>
				<h3><?php echo ($name)  ?></h3>
			</div>
			<div class="hero_stats">
				<h4>lvl: 200 devo</h4>
				<div class="stat"> <img class="stat_img" id="hp"  src="../img/ico_hp.png" alt="nema slike" /> HP: <?php echo ($hero['hp']);  ?> </div>
				<div class="stat"> <img class="stat_img" id="attack"  src="../img/ico_attack.png" alt="nema slike" />ATK: <?php echo ($hero['attack']);  ?> </div>
				<div class="stat"> <img class="stat_img" id="attack_speed"  src="../img/ico_attackspeed.png" alt="nema slike" /> ATK SPD: <?php echo ($atkspd);  ?> </div>
				<div class="stat"> <img class="stat_img" id="crit"  src="../img/ico_crit.png" alt="nema slike" /> CRIT: <?php echo ($crit);  ?> </div>
				<div class="stat"> <img class="stat_img" id="dodge"  src="../img/ico_dodge.png" alt="nema slike" /> DODGE: <?php echo ($dodge);  ?> </div>
				<div class="stat"> <img class="stat_img" id="crit_damage"  src="../img/ico_hit.png" alt="nema slike" /> CRIT DMG: <?php echo ($crit_dmg);  ?> </div>
				<div class="stat"> <img class="stat_img" id="mov_speed"  src="../img/ico_movespeed.png" alt="nema slike" /> MOVEMENT SPD: <?php echo ($movspd);  ?> </div>
				<div class="stat"> <img class="stat_img" id="accuracy"  src="../img/ico_roquet.png" alt="nema slike" /> ACC: <?php echo ($acc);  ?> </div>
				<div class="stat"> <img class="stat_img" id="crit_resist"  src="../img/ico_tenacity.png" alt="nema slike" /> CRIT Resist: <?php echo ($crit_resist);  ?> </div>
			</div>
		</div>
		<div class="skill1">

			<div class="hero_skill_img">
				<img  src="<?php echo $skill['img_url'];  ?>" alt="nema slike" />
			</div>

			<div class="skill_stats">
				<div class="skill_desc">
					<?php
					$query = 'SELECT * FROM hero_skills WHERE (hero_id ='. $xd['id'] . ')';
					$lmao = $pdo->query($query);
					$hero_skill = $lmao->fetch();
					//print_r($hero_skill);
				echo '	<div class="level"><a id="' .$hero_skill['hero_id'] . '" href="./php/hero_skill.php?name=' . $hero_skill['name'] . '&la=1&lvl=' . $hero_skill['level'] . '" class="hehe2" left;">+</a>';
				echo '	<h3 class="mrs">Skill Lvl: '.$hero_skill['level'].'</h3>';
			    echo '	<a  id="' . $hero_skill['hero_id'] . '" href="./php/hero_skill.php?name=' . $hero_skill['name'] . '&la=2&lvl=' . $hero_skill['level'] . '" class="hehe2" right;">-</a></div>';
					echo ($hero_skill['description']);
					echo '
					<div class="plus">
					</div>
					';?>

				</div>

			</div>
		</div>

	</div>