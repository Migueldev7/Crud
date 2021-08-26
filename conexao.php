<?php
	try {
		$dns = "mysql:dbname=miguel_banco;host=localhost";
		$user = "miguel_data";
		$pass = "Alemanha123";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}



?>
