<?php
include_once 'db_connect.php';

    echo "<form method='post' action='../index.php'>";

	echo '<button type="submit" name="goToIndex">Go to index</button>';

	echo "</form>";

function deleteAcc(){

	if (isset($_POST['deleteAcc'])){
	    $db= db_connect();

	    $req = $db->prepare("DELETE FROM bankAccount WHERE id=:id");
	    $req->execute(array("id" => $_POST['deleteAcc']));

	    echo 'Your account '.$_POST['deleteAcc'].' has been deleted';
	}
}

deleteAcc();