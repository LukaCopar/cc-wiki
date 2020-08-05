<?php

require '../php/connection.php';

//print_r( $_POST );


$name;
$hero_id;
$lvl_id;
$insignia_id;
$skill_id;
$equipment_id;
$inscription_id;
$enchantment_id;
$trait_bonus_id;
$destiny_id;
$trait_build_id;
$brakethrough_id;
$title_id;



$talent = $_POST['talent'];

$ime = $pdo->prepare('SELECT id FROM talents WHERE (name = ?)');
$talent_id = $ime->execute([$talent]);



//echo($talent_id);



$stmt = $pdo->prepare('INSERT INTO builds(`name`, `hero_id`, `talent_id`, `lvl_id`, `insignia_id`, `skill_id`, `equipment_id`, `inscription_id`, `enchantment_id`, `trait_bonus_id`, `destiny_id`, `trait_build_id`, `brakethrough_id`, `title_id`)
		   VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->execute(["name", 1, $talent_id, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]);





header('Location: ./insert.php');
