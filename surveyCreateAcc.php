<html>

<!-- Create a survey to create bank account -->

<head>
	<title>Create an account</title>
	<meta charset="utf-8">
	<meta name="author" content="Benjammin GRANDIN Micael DOS SANTOS Sofiane BENHAMED" >
	<meta name="description" content="survey account creation">
</head>

<body>

	<title> Create account</title>


<form id="surveyAcc"  method="POST" action="">

<form id="surveyAcc" name="createAccountForm" method="POST" action="">

<!-- Identifiant du compte bancaire -->

<!-- Identifiant de l’utilisateur -->



<!-- Nom du compte -->
	<div id="accountName" class="box">
		<label for="inputNameAccount" >Name of your account</label>
		<input id="inputNameAccount" type="text" name="accName">
	</div>


 <!-- Type de compte (courant, épargne et compte joint)  Provision du compte -->

 	<div id="survey_event_what_type" >
		<label>What is the type of your account ?</label>
		<select name="accType">
			<option value="savings" >savings</option>
			<option value="checking" selected="selected">checking</option>
			<option value="joint">joint</option>
		</select>
	</div>

<!-- Balance account -->

	<div id="accountBalance" class="box">
		<label for="inputBalanceAccount" >Balance of your account</label>
		<input id="inputBalanceAccount" type="text" name="accBalance">
	</div>



<!-- Devise du compte (USD et EUR) -->

 	<div id="survey_event_what_type" >

		<label>What is the currency of your account ?</label>
		<select name="accCurrency">

			<option value="USD" >USD</option>
			<option value="EUR" selected="selected">EUR</option>

		</select>
	</div>

<!-- Button for sent -->


	<button type="submit" name="createAccountForm" id="surveyAccButton">Send</button>

</form>

<?php   include_once 'function/checkSurvey.php';

checkAll();

	
function db_connect() {

	try {
	
	$host 	  = "localhost";
	$dbname   = "budgetManagementPhp";
	$user 	  = "root";
	$password = "root";

	$db = new PDO(
		"mysql:host=$host;dbname=$dbname",
		$user,
		$password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND)
	);
	
	return $db;
	}
	catch(Exception $e) {
		die( 'Erreur : ' . $e->getMessage());
	}

}
?>

</body>

</html>
