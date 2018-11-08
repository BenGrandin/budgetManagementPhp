<?php
include_once 'db_connect.php';

    echo "<form method='post' action='../index.php'>";

	echo '<button type="submit" name="goToIndex">Go to index</button>';

	echo "</form>";

function deleteAcc(){
    $db= db_connect();

    $req = $db->prepare("DELETE FROM bankAccount WHERE id=:id");
    $req->execute(array("id" => 2));

}

deleteAcc();