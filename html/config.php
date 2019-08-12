<?php
$hn = 'localhost';
$un = 'jainj_nihar';
$pwd = 'nihar';
$db = 'jainj_nihardb';

try {
	$dsn = "mysql:host=". $hn . ";dbname=". $db;
	$pdo = new PDO($dsn, $un, $pwd);
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

?>
