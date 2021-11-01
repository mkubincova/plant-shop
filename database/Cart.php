<?php

//Use to fetch product data
class Cart{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //insert into cart table
    public function saveToCart($params = null, $table = 'cart'){
        if($this->db->con != null){
            if($params != null){
                $columns = implode(',', array_keys($params));
                $values = implode(',', array_values($params));

                //create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table, $columns, $values);
          
                //execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    //get customerId and productId and insert into table
    public function addToCart($customerId, $productId){
        if(isset($customerId) && isset($productId)){
            $params = array(
                "customerId" => $customerId,
                "productId" => $productId
            );
            //insert data into cart
            $result = $this->saveToCart($params);
            if($result){
                //reload page
                header("Location: cart.php");
            }
        }
    }

    //get cart by customerId
    public function getCart($customerId = null, $table = 'cart')
    {
        if (isset($customerId)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE customerId = {$customerId}");
            $resultArr = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArr[] = $item;
            }

            return $resultArr;
        }
    }

    //calculate subTotal
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f',$sum);
        }
    }

    //delete cart item by productId and customerId
    public function deleteCart($customerId, $productId, $table = 'cart'){
        if(isset($productId) && isset($customerId)){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE productId = {$productId} AND customerId = {$customerId}");
            if($result){
                header("Location: cart.php");
            }
            return $result;
        }
    }

    //get productId from shopping cart list
    public function getCartId($cartArr = null, $key = 'productId'){
        if($cartArr != null){
            $cartId = array_map (function($value) use($key){
                return $value[$key];
            }, $cartArr);
            return $cartId;
        }
    }
}

