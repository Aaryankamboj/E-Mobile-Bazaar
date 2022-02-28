<?php
// Require MYSQL Connection
require('database/DBController.php');

// Require Product class
require('database/Product.php');



// Require Cart class
require('database/Cart.php');


// DBController object
$db=new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();


// Cart object
$Cart=new Cart($db);
// print_r($Cart->);


