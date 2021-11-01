<?php

//identify customer
if (!isset($_COOKIE["customerId"])) {
    $cookie_name = "customerId";
    $cookie_value = rand();
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location:" . $_SERVER['PHP_SELF']); //reload page to save the cookie
}

//required MySQL Connection
require('database/DBController.php');

//required Product Class
require('database/Product.php');

//required Cart Class
require('database/Cart.php');


//DBController object
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart object
$cart = new Cart($db);
$customerCart = $cart->getCart($_COOKIE["customerId"]);
$cartIdArr = $cart->getCartId($customerCart) ?? [];






