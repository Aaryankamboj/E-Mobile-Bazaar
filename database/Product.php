<?php
// Use to fetch product data
class Product{

    public $db=null;
    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db=$db;

    }

    // Fetch product data using getData Method
    public function getData($table='product'){
       $result =  $this->db->con->query(query:"SELECT * FROM {$table}");
       $resultArray = array();

    //    Fetch product data one by one
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[]=$item;
       }
       return $resultArray;
    }


// Get Product using Item ID
public function getProduct($item_id=null, $table='product'){
    if(isset($item_id)){
        $result=$this->db->con->query(query:"SELECT * FROM {$table} WHERE item_id = {$item_id}");
        $resultArray = array();

    //    Fetch product data one by one
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[]=$item;
       }
       return $resultArray;
    }
}
}