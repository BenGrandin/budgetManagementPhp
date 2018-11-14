<html>

<!-- Create a survey to create bank account -->

<head>
	<title>Create an account</title>
	<meta charset="utf-8">
	<meta name="author" content="Benjammin GRANDIN Micael DOS SANTOS Sofiane BENHAMED" >
	<meta name="description" content="survey account creation">
	
</head>

<body>

	<h1> Create an account</h1>

<form id="surveyAcc" name="createAccForm" method="POST" action="function/checkSurvey.php"> <!-- ne renvoi pas.. -->

<!-- Identifiant du compte bancaire -->

<!-- Identifiant de l’utilisateur -->



<!-- Nom du compte -->
	<div id="accName" class="box">
		<label for="inputNameAcc" >Name of your account</label>
		<input id="inputNameAcc" type="text" name="accName">
	</div>


 <!-- Type de compte (courant, épargne et compte joint) -->

 	<div id="divAccType" >
		<label for="inputAccType" >What is the type of your account ?</label>
		<select id="inputAccType" name="accType">
			<option value="savings" >savings</option>
			<option value="checking" selected="selected">checking</option>
			<option value="joint">joint</option>
		</select>
	</div>

<!-- Balance account -->

	<div id="divAccBalance" class="box">
		<label for="inputAccBalance" >Balance of your account</label>
		<input id="inputAccBalance" type="number" name="accBalance">
	</div>



<!-- Devise du compte (USD et EUR) -->

 	<div id="divAccCurrency" >

		<label for="inputAccCurrency">What is the currency of your account ?</label>
		<select id="inputAccCurrency" name="accCurrency">

			<option value="USD" >USD</option>
			<option value="EUR" selected="selected">EUR</option>

		</select>
	</div>

<!-- Button for sent -->

	<button type="submit" name="buttonCreateAccForm" id="surveyAccButton">
		Send
	</button>

</form>

<!-- Form to go back to the index -->

    <form name="backToIndex" action="index.php">
    	<button name="buttonBackToIndex" >
			Back to index
    	</button>
	</form>

<!-- function to display message if exist -->

<?= isset($_GET['message']) ? $_GET['message'] : ''; ?>

</body>

</html>
