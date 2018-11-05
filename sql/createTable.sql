/* Create table category */
CREATE TABLE category (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    idUser INT UNSIGNED NOT NULL,
    nameOfCategory VARCHAR(15),
    typeOperation ENUM("debit", "credit")
    PRIMARY KEY (id)
)
CHARACTER SET "utf8"
ENGINE=INNOB

/* Create Opération Table */ 

CREATE TABLE operation (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	idOperation INT(10) NOT NULL UNIQUE,
	idBankAcc INT(10) NOT NULL,
	idCategory INT(20) NOT NULL,
	nameOperation VARCHAR(50) NOT NULL,
	amountOperation INT(10) NOT NULL,
	dateOperation date NOT NULL,
	PRIMARY KEY (id)
)
ENGINE=INNODB DEFAULT CHARSET="utf-8"

/* Create table bankAccount */

CREATE TABLE bankAccount(
	id INT UNSIGNED UNIQUE NOT NULL AUTO_INCREMENT ,
	userId INT UNSIGNED NOT NULL,
	accountName VARCHAR (40) NOT NULL,
	accountType ENUM("checking", "savings", "joint") NOT NULL DEFAULT("checking"),
	balance INT,
	currency ENUM("USD", "EUR") NOT NULL DEFAULT("EUR"),

	PRIMARY KEY (id),
	FOREIGN KEY(userId) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE
	)
CHARACTER SET "utf8"
ENGINE=INNOB