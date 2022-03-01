<?php

// Require MYSQL Connection

// Require Product class
require('../database/Product.php');
require('../database/DBController.php');
$db=new DBController();

$product = new Product($db);
if(isset($_POST['item_id'])){
    $result=$product->getProduct($_POST['item_id']);
    echo json_encode($result);

}

?>