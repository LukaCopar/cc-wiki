<?php
$dbhost = "192.168.1.11";
$dbuser = "cc-wiki";
$dbpass = "";
$db = "cc-wiki";
$charset = 'utf8';



$dsn = "mysql:host=$dbhost;dbname=$db;charset=$charset";
$opt = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
	$pdo = new PDO($dsn, $dbuser, $dbpass, $opt);
} catch (\PDOException $e) {
	throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
