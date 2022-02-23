<?php
// Use to fetch new Phones Section data
class newPhonesSection{

    public $db=null;
    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db=$db;

    }

    // Fetch product data using getData Method
    public function getData($table='newphonessection'){
       $result =  $this->db->con->query(query:"SELECT * FROM {$table}");
       $resultArray = array();

    //    Fetch product data one by one
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[]=$item;
       }
       return $resultArray;
    }

}