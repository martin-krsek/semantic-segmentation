<?php


class Database
{
    public $conn;

    public function __construct(){
    }

    public function getConn()
    {
        $this->conn = null;
        try {
            $conn = new PDO("mysql:host=db;dbname=semantic_segmentation", "root", "password");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}