<?php
// Require MYSQL Connection
require('database/DBController.php');

// Require Product class
require('database/Product.php');

// Require topSale class
require('database/TopSale.php');

// Require newPhoneSection class
require('database/newPhonesSection.php');

// Require Cart class
require('database/Cart.php');


// DBController object
$db=new DBController();

// Product object
$product = new Product($db);
$ts  = new TopSale($db);
$newPh = new newPhonesSection($db);

// Cart object
$Cart=new Cart($db);


