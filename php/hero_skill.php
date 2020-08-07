<?php
require 'connection.php';

$la = 0;
$level = 1;
$name = " ";
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
if ($level >= 15) {
    $level = 15;
}
if ($level <= 1)
    $level = 1;


$lmao1 = $pdo->query('SELECT * FROM hero_skills WHERE (name ="'. $name . '" AND level = '.$level.')');
$xd = $lmao1->fetch();

echo' 

                <div class="skill_desc">
                    	<div class="level"><a id="' .$xd['hero_id'] . '" href="../php/hero_skill.php?name=' . $xd['name'] . '&la=1&lvl=' . $xd['level'] . '" class="hehe2" style="float: left;">+</a>
					<h3 class="mrs">Skill Lvl: '.$xd['level'].'</h3>
			    	<a  id="' . $xd['hero_id'] . '" href="../php/hero_skill.php?name=' . $xd['name'] . '&la=2&lvl=' . $xd['level'] . '" class="hehe2" style="float: right;">-</a></div>
					'
					.
					($xd['description'])
                    .'
                    <div class="plus">
                    </div>
				</div>

			</div>';