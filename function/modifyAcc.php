<?php
include_once 'db_connect.php';

    echo "<form method='post' action='../index.php'>";

	echo '<button type="submit" name="goToIndex">Go to index</button>';

	echo "</form>";

function modifyAcc(){
    $db= db_connect();

$idBankAccount = "SELECT id FROM bankAccount"; 

    echo 'Your account 3 has been modify';
    echo "$idBankAccount";

}


function checkAll(){

	$availableAccType = ['savings', 'checking', 'joint'];
	$availableAccCurrency = ['EUR', 'USD'];

	if(isset($_POST['updateAccountForm'])){

		$accName = $_POST['accName'];
		$accType = $_POST['accType'];
		$accBalance = $_POST['accBalance'];
		$accCurrency = $_POST['accCurrency'];

		$db = db_connect();

	/* Thibaud as titiWhereAreYouWeNeedYou  on t'aime */
	
		/* Verify acc exist */
		$req = $db->prepare("SELECT id=:y FROM bankAccount")
		$req->execute(array("y" => )

		$data = $req->fetch();

		$idBankAccount= $data['id'];

		/* Request check userId */
		$req = $db->prepare("SELECT userId as accNumber FROM bankAccount WHERE userId=:x");
		$req->execute(array("x" => $_SESSION['userId']));

		$data = $req->fetch();

		$userId = $data['accNumber'];

		/* Check all condition of bankAccount */
		if ($idBankAccount == null){
			$message = "Account doesn't exist";
		}
			elseif( $userId != $_SESSION['userId'])) {
			$message = "You only can edit your own account";
			}

			elseif( (strlen($accName)>40) || (strlen($accName)==0) ){
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

modifyAcc();