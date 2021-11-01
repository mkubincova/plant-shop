/* commands to initialize mysql database */

CREATE DATABASE plantshopDB;

CREATE TABLE plantshopDB.products (
    productId INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    botName VARCHAR(100),
    imgUrl VARCHAR(500),
    category VARCHAR(100),
    water INT(1),
    sun INT(1),
    temperature INT(1),
    description VARCHAR(500),
    PRIMARY KEY(productId)
);

CREATE TABLE plantshopDB.cart(
    cartId INT NOT NULL AUTO_INCREMENT,
    productId INT NOT NULL,
    customerId INT NOT NULL,
    timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(cartId),
    FOREIGN KEY (productId) REFERENCES products(productId)
);

CREATE TABLE plantshopDB.tips(
    tipId INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    text VARCHAR(500),
    imgUrl VARCHAR(500) NOT NULL,
    timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(tipId)
);