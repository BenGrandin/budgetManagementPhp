CREATE DATABASE budgetManagementPhp

USE DATABASE budgetManagementPhp

-- Create table user

CREATE TABLE users
	(
	    id INT UNSIGNED UNIQUE NOT NULL AUTO_INCREMENT,
	    	PRIMARY KEY (id),
	    mailUser VARCHAR(100) UNIQUE NOT NULL ,
	    passoword VARCHAR(20)NOT NULL,
    )
    CHARACTER SET "utf8"
    ENGINE = INNODB ;

 INSERT INTO users
 VALUES (1, 'bengrandin@hotmail.com','12345'),
 		(2, 'dossantosalmeidamicael@gmail.com','123456'),
 		(3, 'sofiane.benhamed@edu.itescia.fr','1234567');

-- Create table category

CREATE TABLE category 
	(
	    id INT UNIQUE NOT NULL AUTO_INCREMENT,
	    	PRIMARY KEY (id),
	    nameOfCategory VARCHAR(15),
	    typeOperation ENUM("debit", "credit")
	)
    CHARACTER SET "utf8"
    ENGINE = INNODB ;

INSERT INTO category
VALUES (1,'food','credit');

-- Create table bankAccount

CREATE TABLE bankAccount(
	id INT UNIQUE NOT NULL AUTO_INCREMENT,
		PRIMARY KEY (id),
	userId INT UNSIGNED NOT NULL,
		FOREIGN KEY(userId) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
	accountName VARCHAR (40) NOT NULL,
	accountType ENUM("checking", "savings", "joint") NOT NULL DEFAULT "checking",
	balance FLOAT,
	currency ENUM("USD", "EUR") NOT NULL DEFAULT "EUR"
	)
ENGINE=INNODB DEFAULT CHARSET="utf8";

INSERT INTO bankAccount(userID,accountName,accountType,balance,currency)
VALUES (1, 'benCheck','checking','500','EUR'),
		(2, 'mikaCheck','checking','211','EUR'),
		(2, 'mikaCheck2','checking','222','EUR'),
		(2, 'mikaCheck3','checking','233','EUR'),
		(3, 'sofianeCheck1','checking','311','EUR'),
		(3, 'sofianeCheck2','checking','322','EUR');



-- Create Opération Table

CREATE TABLE operation
	(
		id INT UNIQUE NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (id),
		idBankAcc INT(10) NOT NULL,
			FOREIGN KEY (idBankAcc) REFERENCES bankAccount(id) ON UPDATE CASCADE ON DELETE CASCADE,
		idCategory INT(20) NOT NULL,
			FOREIGN KEY (idCategory) REFERENCES category(id) ON UPDATE CASCADE ON DELETE CASCADE,
		nameOperation VARCHAR(50) NOT NULL,
		amountOperation INT(10) NOT NULL,
		dateOperation date NOT NULL
	)
	ENGINE=INNODB DEFAULT CHARSET="utf8";
