<?php

include_once 'db_connect.php';

/* Chekc accName and accType and accBalance and accCurrency */

function checkAll(){

	$availableAccType = ['savings', 'checking', 'joint'];
	$availableAccCurrency = ['EUR', 'USD'];


	if(isset($_POST['createAccountForm'])){

	$accName = $_POST['accName'];
	$accType = $_POST['accType'];
	$accBalance = $_POST['accBalance'];
	$accCurrency = $_POST['accCurrency'];

		if( (strlen($accName)>40) || (strlen($accName)==0) )
		 {
			$message = "Name your account between 1 and 40";
		}
		elseif (!in_array($accType, $availableAccType)) {
			$message = "error accType";
		}
		elseif (!is_numeric($accBalance)) {
			$message = "Enter a balance amount";
		}
		elseif (!in_array($accCurrency, $availableAccCurrency)) {
			$message = "accCurrency";
		}
		else {

			/* Connect to the bdd */
			$db = db_connect();

			/*Preration of the request */

			$req = $db -> prepare("INSERT INTO bankAccount(userID,accountName,accountType,balance,currency) VALUES (:userID,:accountName,:accountType,:balance,:currency);");
			$req->execute(array("userID" =>1,"accountName"=>$accName,"accountType"=>$accType,"balance"=>$accBalance,"currency"=>$accCurrency));
			$message = "Your account has been created";

			
		}

		header('Location: ../surveyCreateAcc.php?message=' . $message);
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

checkALL();



