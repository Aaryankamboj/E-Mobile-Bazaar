<?php
// PHP Cart class
ob_start();
class Cart{
    public $db=null;
    public function __construct(DBController $db)
    {if(!isset($db->con)) return null;
        $this->db=$db;        
    }
    // Insert into Cart table
    public function insertintoCart($params=null,$table="cart"){
        if($this->db->con!=null){
            if($params!=null){
                // Insert into cart(user_id) values ( )
                // get table columns
                $columns=implode(',', array_keys($params));
                print_r($columns);
                $values=implode(',', array_values($params));
                print_r($values);

                // Create SQL Query
                $query_string=sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);
            
               // Execute Query
               $result = $this->db->con->query($query_string);
               return $result;
            }
        }
    }

    // To get user_id and item_id and insert into cart table
    public function addToCart($userid, $itemid){
        if(isset($userid) && isset($itemid)){
            $params = array(
                "user_id"=>$userid,
                "item_id"=>$itemid
            );

            // Insert data into Cart
            $result = $this->insertintoCart($params);
            if($result){
                // Reload Page
                header("Location: ".$_SERVER['PHP_SELF']);

            }
        }
    }

    // Calculate Subtotal
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum+=floatval($item[0]);
            }
            return sprintf($sum);
        }
    }

    // Delete cart item using cart item_id
    public function deleteCart($item_id=null, $table='cart'){
        if($item_id!=null){
            $result = $this->db->con->query(query:"DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location: ". $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
    // Get Item_id of Shopping Cart List
    public function getCartId($cartArray=null, $key = "item_id"){
        if($cartArray!=null){
            $cart_id=array_map(function($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }

    }
// Save for later
public function saveForLater($item_id=null, $saveTable="wishlist", $fromTable="cart"){
    if($item_id!=null){
        $query="INSERT INTO {$saveTable} SELECT *FROM {$fromTable} WHERE item_id={$item_id};";
        $query.="DELETE FROM {$fromTable} WHERE item_id={$item_id};";
        // Execute multiple query

        $result=$this->db->con->multi_query($query);
        if($result){
            header("Location : ".$_SERVER['PHP_SELF']);
        }
        return $result;

    }
}
}