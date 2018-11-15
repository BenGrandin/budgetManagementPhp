<?php
session_start();

$_SESSION['userId']=2;

include_once 'db_connect.php';

checkALL();

/* Check accName and accType and accBalance and accCurrency */

function checkAll(){

	$availableAccType = ['savings', 'checking', 'joint'];
	$availableAccCurrency = ['EUR', 'USD'];

	if(isset($_POST['createAccForm'])){

	$accName = $_POST['accName'];
	$accType = $_POST['accType'];
	$accBalance = $_POST['accBalance'];
	$accCurrency = $_POST['accCurrency'];

	$db = db_connect();

	/* Request check accNumber */
	$req = $db->prepare("SELECT COUNT(userId) as accNumber FROM bankAccount WHERE userId=:userId");
	$req->execute(array("userId" => $_SESSION['userId']));

	$data = $req->fetch();

	$accNummber = $data['accNumber'];

	/* Check all condition of bankAccount */
	if ( $accNumber >= 10) {
		$message = "You reach the maximum of 10 accounts per user";
		}
		elseif( (strlen($accName)>40) || (strlen($accName)==0) ){
			$message = "Name your account between 1 and 40";
		}
		elseif (!in_array($accType, $availableAccType)) {
			$message = "accType not available";
		}
		elseif (!is_numeric($accBalance)) {
			$message = "Enter a numeric balance amount";
		}
		elseif (!in_array($accCurrency, $availableAccCurrency)) {
			$message = "accCurrency not available";
		}
		else {

			/* Connect to the bdd */
			$db = db_connect();

			/* Request create an account */

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



echo checkSelector($availableAccCurrency, $_POST['current'],"name")
  function checkSelector($array, $value, $message){

  	if(!in_array($array, $value,$message)){
  		return $message;
  	}else{
  		return true;
  	}
 }

/*
 checkSelector(['EUR', 'USD'], $_POST['currency'], "Votre devise n'esrt ") */



function square(a){
	a= a*a;
	return a;
}

