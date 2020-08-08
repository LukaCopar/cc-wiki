<?php

require './connection.php';


$path = '';
if(isset($_POST['url']))
	$path .= $_POST['url'];
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
echo $base64;

?>