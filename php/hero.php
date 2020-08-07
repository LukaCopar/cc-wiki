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


<html>

<head>
	<title>Hero: <?php echo ($name); ?></title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
	<div id="hero">
		<div class="hero1">

			<div class="hero_img">
				<img style="max-height: 100%;" src="<?php echo ($url1);  ?>" alt="nema slike" />
				<h3><?php echo ($name)  ?></h3>
			</div>

			<div class="hero_stats">
				<div class="stat"> <img class="stat_img" style="max-height: 100%;" src="../img/ico_hp.png" alt="nema slike" /> HP: <?php echo ($hero['hp']);  ?> </div><br>
				<div class="stat"> <img class="stat_img" style="max-height: 100%;" src="../img/ico_attack.png" alt="nema slike" />ATK: <?php echo ($hero['attack']);  ?> </div><br>
				<div class="stat"> <img class="stat_img" style="max-height: 100%;" src="../img/ico_attackspeed.png" alt="nema slike" /> ATK SPD: <?php echo ($atkspd);  ?> </div><br>
				<div class="stat"> <img class="stat_img" style="max-height: 100%;" src="../img/ico_crit.png" alt="nema slike" /> CRIT: <?php echo ($crit);  ?> </div><br>
				<div class="stat"> <img class="stat_img" style="max-height: 100%;" src="../img/ico_dodge.png" alt="nema slike" /> DODGE: <?php echo ($dodge);  ?> </div><br>
				<div class="stat"> <img class="stat_img" style="max-height: 100%;" src="../img/ico_hit.png" alt="nema slike" /> CRIT DMG: <?php echo ($crit_dmg);  ?> </div><br>
				<div class="stat"> <img class="stat_img" style="max-height: 100%;" src="../img/ico_movespeed.png" alt="nema slike" /> MOVEMENT SPD: <?php echo ($movspd);  ?> </div><br>
				<div class="stat"> <img class="stat_img" style="max-height: 100%;" src="../img/ico_roquet.png" alt="nema slike" /> ACC: <?php echo ($acc);  ?> </div><br>
				<div class="stat"> <img class="stat_img" style="max-height: 100%;" src="../img/ico_tenacity.png" alt="nema slike" /> CRIT Resist: <?php echo ($crit_resist);  ?> </div><br>
			</div>
		</div>
		<div class="skill1">

			<div class="hero_skill_img">
				<img style="max-height: 100%;" src="<?php echo $skill['img_url'];  ?>" alt="nema slike" />
			</div>

			<div class="skill_stats">
				<div class="skill_desc">
					<?php
					$query = 'SELECT * FROM hero_skills WHERE (id = (SELECT skill_id FROM heros WHERE id = ' . $xd['id'] . '))';
					$lmao = $pdo->query($query);
					$hero_skill = $lmao->fetch();
					//print_r($hero_skill);
					echo ($hero_skill['description'])
					?>


				</div>

			</div>
		</div>

	</div>
</body>

</html>