-- Create account

INSERT INTO bankAccount(userID,accountName,accountType,balance,currency)
VALUES (1, 'benCurrent','current','500','EUR');
VALUES (1, $_POST['accName'],$_POST['accType'],$_POST['accBalance'],$_POST['accCurrency']);