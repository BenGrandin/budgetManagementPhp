<html>

<head>

	<title>My account</title>
	<meta charset="utf-8">
	<meta name="author" content="Benjammin GRANDIN Micael DOS SANTOS Sofiane BENHAMED" >

</head>

<body>
    <h1>Manipulate confirm dialog</h1>

    <form name="createAcc" action="surveyCreateAcc.php">
    	<button name="createAcc" >
			Create an account
    	</button>
	</form>

<?php
	session_start();

	$_SESSION['userId']=1;

    include_once 'function/displayAcc.php';

    displayAcc();

?>

</body>

</html>
