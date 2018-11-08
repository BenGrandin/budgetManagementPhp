<?php
<<<<<<< HEAD

=======
session_start();

$_SESSION['userId']=1;

include_once 'function/db_connect.php';
>>>>>>> master

?>

<html>

<<<<<<< HEAD

<head>

	<title>My account</title>
	<meta charset="utf-8">
	<meta name="author" content="Benjammin GRANDIN Micael DOS SANTOS Sofiane BENHAMED" >
	<script src="../js/index.js"></script>

</head>

<body>

	<div class="uk-section uk-section-primary">

  		<div class="uk-container">
    		<h1>Manipulate confirm dialog</h1>
    		<button id="btn" class="uk-button uk-button-primary">Click me!</button>
  		</div>

	</div>

</body>

</html>
	
=======
<head>
    <title>My account</title>
    <meta charset="utf-8">
    <meta name="author" content="Benjammin GRANDIN Micael DOS SANTOS Sofiane BENHAMED" >
    <script src="../js/index.js"></script>
</head>
<body>
    <h1>Welcome</h1>

<?php

    function displayAcc(){
        $db= db_connect();

        $req = $db->prepare("SELECT * FROM bankAccount WHERE userId=:userId");
        $req->execute(array("userId" => $_SESSION['userId']));

        $data = $req->fetchAll();

        foreach($data as $row) {

            echo "<form method='post' action=''>";

                echo htmlspecialchars($row['accountName'].' '.$row['accountType'].' '.$row['balance'].' '.$row['currency']);

                echo '<button type="submit" name"deleteAccont" value="' . $row['id'] . '">Delete</button>';


            echo "</form>";
           }  
    }

    function displayAcc();

    $req = $db->prepare("DELETE FROM bankAccount WHERE ")

?>

</body>



</html>
>>>>>>> master
