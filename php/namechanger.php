<?php
require 'connection.php';

$query = 'SELECT name FROM heros';
$lmao = $pdo->query($query);
while ($xd = $lmao->fetch()) {
    //echo $xd['name'];

    $query_update = '
UPDATE heros
SET img_url =REPLACE(REPLACE(CONCAT("../img/",(SELECT LOWER(name) FROM heros WHERE name = "' . $xd["name"] . '"),".png"), " ", ""), "\'","")
WHERE name =  "' . $xd['name'] . '" ;';

    echo $query_update;
    echo '<br>';
    // $pdo->query($query_update);
}



//UPDATE heros SET img_url =REPLACE(REPLACE(CONCAT('../img/',(SELECT LOWER(name) FROM heros WHERE name = "Lil' Nick"),'.png'), ' ', ''), "'",'') WHERE name = "Lil' Nick"