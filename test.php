<?php

function checkAll(){
	$availableAccType = ['savings', 'checking', 'joint'];
	$availableAccCurrency = ['EUR', 'USD'];




	if(
		()
		&&(!is_numeric($_POST['accBalance']))
		&&(!in_array($_POST['accCurrency'], $availableAccCurrency))
	){
		echo "erreur";
	}else {
		echo "tout est ok";

	switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}