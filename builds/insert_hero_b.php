<?php

require '../php/connection.php';

//print_r( $_POST );


$name = $_POST['name'];
$biography = $_POST['bio'];
$skill = $_POST['skill'];
$url1 = $_POST['url'];
$url2 = $_POST['url2'];
$warden = $_POST['warden'];
$movspd = $_POST['movspd'];
$atkspd = $_POST['atkspd'];

//echo($skill);

$ime = $pdo->prepare('SELECT id FROM hero_skills WHERE (name = ?)');
$skill_id = $ime->execute([$skill]);

$ime = $pdo->prepare('SELECT id FROM wardens WHERE (name = ?)');
$warden_id = $ime->execute([$warden]);


//echo($warden_id);


$stmt = $pdo->prepare('INSERT INTO heros( `name`, `biography`, `skill_id`, `img_url`, `img_url_evo`, `warden_id`, `move_spd`, `atk_speed`) VALUES (?,?,?,?,?,?,?,?)');
$stmt->execute([$name, $biography, $skill_id, $url1, $url2, $warden_id, $movspd, $atkspd]);





header('Location: ./insert_hero.php');
