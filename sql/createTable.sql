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