<?php
    include_once 'db_connect.php';
function displayAcc(){
	$db= db_connect();
    $req = $db->prepare("SELECT * FROM bankAccount WHERE userId=:userId");
    $req->execute(array("userId" => $_SESSION['userId']));

    $data = $req->fetchAll();

    foreach($data as $row) {

    	echo "<form method='post' action='function/deleteAcc.php'>";

        echo htmlspecialchars($row['accountName'].' '.$row['accountType'].' '.$row['balance'].' '.$row['currency']);

        echo '<button type="submit" name="deleteAccont" value="' . $row['id'] . '">Delete</button>';

        echo "</form>";
    }  
}