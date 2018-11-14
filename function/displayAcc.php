<?php
    include_once 'db_connect.php';
        $_SESSION['userId']=1;


function displayAcc(){
	$db= db_connect();
    $req = $db->prepare("SELECT * FROM bankAccount WHERE userId=:userId");
    $req->execute(array("userId" => $_SESSION['userId']));

    $data = $req->fetchAll();

    foreach($data as $row) {

    	echo "<form method='post' action='function/deleteAcc.php'>";

            echo htmlspecialchars($row['accountName'].' '.$row['accountType'].' '.$row['balance'].' '.$row['currency']);

            echo '<button type="submit" name="deleteAcc" value="' . $row['id'] . '">Delete</button>';

        echo "</form>";



        echo "<form method='post' action='function/modifyAcc.php'>";

            echo '<button type="submit" name="modifyAcc" value="' . $row['id'] . '">Modify</button>';

        echo "</form>";
    }  
}