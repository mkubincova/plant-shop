<?php

//Use to fetch product data
class Product{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //fetch product data getData method
    public function getData($table = 'products'){
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArr = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArr[] = $item;
        }

        return $resultArr;
    }

    //get product by productId
    public function getProduct($productId = null, $table = 'products'){
        if(isset($productId)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE productId = {$productId}");
            $resultArr = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArr[] = $item;
            }

            return $resultArr;
        }
    }
}

