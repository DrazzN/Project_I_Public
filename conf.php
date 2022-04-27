<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "e_dbase";

	try {
    $sql = "mysql:host=".$server.";dbname=".$database;
		$pdo = new PDO($sql, $user, $pass);
    // Set the PDO error mode to exception
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection success!!";
  } 
	catch(PDOException $e) {
		echo "Connection Failed ".$e->getCode();
	}
?>