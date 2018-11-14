<?php

/* Connect to the bdd */

function db_connect() {

	try 
	{
		$host 	  = "localhost";
		$dbname   = "budgetManagementPhp";
		$user 	  = "root";
		$password = ""; // for mac = "root"

		$db = new PDO(
			"mysql:host=$host;dbname=$dbname",
			$user,
			$password
		);
		
		return $db;
	}
	
	catch(Exception $e) {
		die( 'Erreur : ' . $e->getMessage());
	}

}
?>