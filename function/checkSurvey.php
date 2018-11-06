<?php

/* Chekc accName and accType and accBalance and accCurrency */

function checkAll(){
	$availableAccType = ['savings', 'checking', 'joint'];
	$availableAccCurrency = ['EUR', 'USD'];

	if(isset($_POST['createAccountForm'])){

		if( (strlen($_POST['accName'])>40) || (strlen($_POST['accName'])==0) )
		 {
		echo "error accName";
		}
		elseif (!in_array($_POST['accType'], $availableAccType)) {
			echo "error accType";
		}
		elseif (!is_numeric($_POST['accBalance'])) {
			echo "error accBalance";
		}
		elseif (!in_array($_POST['accCurrency'], $availableAccCurrency)) {
			echo "accCurrency";
		}
		else {
			echo "everything all right";
			/*
			/* Connect to the bdd 
			$db = db_connect();

			/* Preration of the request 

			$req = $db -> prepare("SELECT * FROM bankAccount WHERE name = :bob");
			$req->execute(array("bob" => $_POST['accName']));
			echo name;
			*/
		}
	}
}


/* Check account name between 1 and 40 */

function checkAccName(){
	if(isset($_POST['createAccountForm'])){
	 	if(strlen($_POST['accName'])>40 || strlen($_POST['accName'])==0){
 			echo "erreur"; 			
 		}else{
 			echo "tout est ok";
	 	}
	}
}

/* Check account type valid */

function checkAccType(){
		$availableAccType = ['savings', 'checking', 'joint'];

 	if(isset($_POST['createAccountForm'])){

 		if(!in_array($_POST['accType'], $availableAccType)){
 			echo "erreur";
 			
 		}else{
 			echo "tout est ok";
 		}
 	}
 }

/* Check account balance valid */

 function checkAccBalance(){
	if(isset($_POST['accBalance'])){
	 	if(!is_numeric($_POST['accBalance'])){
 			echo "erreur"; 			
 		}else{
 			echo "tout est ok";
	 	}
	}
}

/* Check account Currency valid */

 function checkAccCurrency(){
 	$availableAccCurrency = ['EUR', 'USD'];

 	if(isset($_POST['createAccountForm'])){

 		if(!in_array($_POST['accCurrency'], $availableAccCurrency)){
 			echo "erreur";
 			
 		}else{
 			echo "tout est ok";
 		}
 	}
 }



