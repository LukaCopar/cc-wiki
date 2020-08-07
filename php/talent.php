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
} else {
    $level--;
}
if ($level >= 10) {
    $level = 10;
}
if ($level <= 1)
    $level = 1;


$lmao1 = $pdo->query('SELECT * FROM talents WHERE (name="' . $name . '" AND level =' . $level . ')');
$xd = $lmao1->fetch();

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
    
    </span>';
