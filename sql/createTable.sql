/* Create table user */
CREATE TABLE user (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    IdUser INT UNSIGNED NOT NULL ,
    passoword VARCHAR(20)NOT NULL,
    PRIMARY KEY (id)
    )
    CHARACTER SET "utf8"
    ENGINE = INNODB

/* Create table category */
CREATE TABLE category (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    idUser INT UNSIGNED NOT NULL,
    nameOfCategory VARCHAR(15),
    typeOperation ENUM("debit", "credit")
    PRIMARY KEY (id)
)
CHARACTER SET "utf8"
ENGINE= INNOB