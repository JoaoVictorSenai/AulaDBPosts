<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "senai";

try {
	$connect = new PDO("mysql:host=" . $host . "; dbname=" . $db, $user, $pass);
} catch (Exception $e) {
	echo "Erro: " . $e;
}

?>