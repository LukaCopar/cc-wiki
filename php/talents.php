<?php
require 'connection.php';
$lmao = $pdo->query("SELECT * FROM talents WHERE (level = 1)");
while ($xd = $lmao->fetch()) {
	echo '
	<div class="talent" value="./php/hero.php?talent=' . $xd['id'] . '" style="width: 200px">
	<img class="talent-img" src="' . $xd['img_url'] . '" alt="no image"/>
			<h4>' . $xd['name'] . '</h4>
			<p>' . $xd['description'] . '</p>
		</div>';
}
