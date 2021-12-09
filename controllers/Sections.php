<?php

require_once("Database.php");

class Sections{

    private PDO $conn;

    public function __construct(){
        $this->conn = (new Database())->getConnection();
    }

    private function updateSections(){


    }

    private function getSections(){

    }
}
?>