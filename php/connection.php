<?php

$whitelistDomains = [
    'cc.wiki/',
    'cc.wiki',
	'cc.wiki/#',
    'https://cc.wiki.com',
    'https://www.cc.wiki.com',
    'http://cc.wiki.com',
    'http://wwwcc.wiki.com',
    'cc.wiki.com',
    'www.cc.wiki.com',
    'wwwcc.wiki.com',
    'https://www.cc.wiki.com',
    'www.cc.wiki.com',
    'http://www.cc.wiki.com',
	'http://wwwcc.wiki.com',
	'/'
];

function checkUrl($link,$whitelistDomains)
{

    $urlData = $_SERVER['REQUEST_URI'];
    $domain = isset($urlData)? $urlData : $link;
	//echo $domain;
    if (in_array($domain,$whitelistDomains)){
        return true;
    }
    else{
		header('Location: http://cc.wiki/');
		die();
	} 
}
foreach($whitelistDomains  as $link){
    checkUrl($link,$whitelistDomains);
}

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


  

