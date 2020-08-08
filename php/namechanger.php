<?php
require 'connection.php';

$query = 'SELECT DISTINCT name FROM talents';
$lmao = $pdo->query($query);
while($xd = $lmao->fetch()){



    $query_update = '
    UPDATE talents
    SET img_url =REPLACE(REPLACE(CONCAT("../img/talents/","'.strtolower($xd['name']).'",".png"), "\'", ""), " ","") 
    WHERE name = "'.$xd['name'].'";
    ';
    echo $query_update. "<br>";
}


/*
//UPDATE heros SET img_url =REPLACE(REPLACE(CONCAT('../img/',(SELECT LOWER(name) FROM heros WHERE name = "Lil' Nick"),'.png'), ' ', ''), "'",'') WHERE name = "Lil' Nick"       


UPDATE hero_skills
SET level = '.$lvl.'
WHERE id =  "' .$i. '" ;';
$lvl++;
    echo $query_update;
    echo '<br>*/