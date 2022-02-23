<?php
// Use to fetch product data
class TopSale{

    public $db=null;
    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db=$db;

    }

    // Fetch Top Sale products data using getData Method
    public function getData($table='topSale'){
       $result =  $this->db->con->query(query:"SELECT * FROM {$table}");
       $resultArray = array();
       

    //    Fetch Top Sale data one by one
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[]=$item;
       }
       return $resultArray;
    }

}