<?php
// Require MYSQL Connection
require('../database/DBController.php');
// Require Product class
require('../database/Product.php');

// Product object
$product = new Product($db);
$db=new DBController();


if(isset($_POST['item_id'])){
    $result=$product->getProduct($_POST['item_id']);
    echo json_encode($result);
}
?>