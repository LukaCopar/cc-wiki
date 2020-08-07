<?php
require 'connection.php';
$name = " ";
$la = 0;
$level = 1;
if (isset($_GET['name']))
	$name = $_GET['name'];

if (isset($_GET['la']))
	$la = $_GET['la'];

if (isset($_GET['lvl']))
	$level = $_GET['lvl'];

if ($la == 1) {
	$level++;
}
if ($level >= 10) {
	$level = 10;
}
// echo $id;
//echo $la;

$lmao = $pdo->query('SELECT * FROM talents WHERE (level = 1)');
while ($xd = $lmao->fetch()) {


	echo '
	<span class="talent" id="' . str_replace(' ', '', $xd['name']) . '">
	<div class="mrs1" value="./php/hero.php?talent=' . $xd['id'] . '">
	<img class="talent-img" src="' . $xd['img_url'] . '" alt="no image"/>
	<div class="talent-lvl">
	<h3>Lvl:'  . $xd['level'] . '</h3>
	<br>
	</div>
		<h4>' . $xd['name'] . '</h4><hr>
		<p class="kurac">' . $xd['description'] . '</p>
		</div>
			<div class="lvl-container">
				<a id="' . str_replace(' ', '', $xd['name']) . '" href="../php/talent.php?name=' . $xd['name'] . '&la=1&lvl=' . $xd['level'] . '" class="hehe plus" style="float: left;">+</a>
				<a  id="' . str_replace(' ', '', $xd['name']) . '" href="../php/talent.php?name=' . $xd['name'] . '&la=2&lvl=' . $xd['level'] . '" class="hehe minus" style="float: right;">-</a>
			</div>
		
		</span>
		';
}










/*
$lmao = $pdo->query('SELECT * FROM talents WHERE (level = 1)');
while ($xd = $lmao->fetch()) {
	if ($xd['name'] == $name) {
		$lmao1 = $pdo->query('SELECT * FROM talents WHERE (name="' . $name . '" AND level =' . $level . ')');
		$xd1 = $lmao1->fetch();
		echo '
	<div class="talent" value="./php/hero.php?talent=' . $xd1['id'] . '" style="width: 200px">
	<img class="talent-img" src="' . $xd1['img_url'] . '" alt="no image"/>
	<div class="talent-lvl"><a href="../php/talents.php?name=' . $xd1['name'] . '&la=1&lvl=' . $xd1['level'] . '" class="hehe" style="float: left;">+</a><a  href="../php/talents.php?id=' . $xd1['id'] . '&la=2&lvl=' . $xd1['level'] . '" class="hehe" style="float: right;">-</a></div>
			<h4>' . $xd1['name'] . '</h4>
			<p>' . $xd1['description'] . '</p>
		</div>';
	} else {

		echo '
	<div class="talent" value="./php/hero.php?talent=' . $xd['id'] . '" style="width: 200px">
	<img class="talent-img" src="' . $xd['img_url'] . '" alt="no image"/>
	<div class="talent-lvl"><a href="../php/talents.php?name=' . $xd['name'] . '&la=1&lvl=' . $xd['level'] . '" class="hehe" style="float: left;">+</a><a  href="../php/talents.php?name=' . $xd['name'] . '&la=2&lvl=' . $xd['level'] . '" class="hehe" style="float: right;">-</a></div>
			<h4>' . $xd['name'] . '</h4>
			<p>' . $xd['description'] . '</p>
		</div>';
	}
}*/
