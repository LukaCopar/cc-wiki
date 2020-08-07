<?php
require 'connection.php';

$id_max = 1984;
$lvl = 1;
for($i = 620;$i <= $id_max;$i++ ){
    if($lvl > 15){
        $lvl = 1;
    }
    $query_update = '
UPDATE hero_skills
SET level = '.$lvl.'
WHERE id =  "' .$i. '" ;';
$lvl++;
    echo $query_update;
    echo '<br>';

}



//UPDATE heros SET img_url =REPLACE(REPLACE(CONCAT('../img/',(SELECT LOWER(name) FROM heros WHERE name = "Lil' Nick"),'.png'), ' ', ''), "'",'') WHERE name = "Lil' Nick"