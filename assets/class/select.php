<?php

class rose
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function index()
    {
        $roseQuery = "SELECT * FROM contact";
        $result = $this->conn->query($roseQuery);
        if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
        }
    }
}