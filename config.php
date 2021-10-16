<?php

$host = 'localhost'; 
$db = 'test_web'; 
$user = 'root'; 
$pass = ''; 

        try {
	$pdo = new PDO('mysql:dbname=test_web; host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}

