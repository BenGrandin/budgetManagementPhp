<html>

<head>

	<title>My account</title>
	<meta charset="utf-8">
	<meta name="author" content="Benjammin GRANDIN Micael DOS SANTOS Sofiane BENHAMED" >

</head>

<body>
    <h1>Manipulate confirm dialog</h1>

<?php
	session_start();

	$_SESSION['userId']=2;

    include_once 'function/displayAcc.php';
    include_once 'function/deleteAcc.php';

    displayAcc();

?>

</body>

</html>
