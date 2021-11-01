<?php

class DBController{
    //Database connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'plantshopDB';

    //Connection property
    public $con = null;

    //Call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error){
            echo "Fail". $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeCon();
    }

    //closing mysqli connection
    protected function closeCon(){
        if($this->con != null){
            $this->con->close();
            $this->con = null; 
        }
    }
}

