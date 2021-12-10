<?php

#require_once("Database.php");

class SectionController{

    private PDO $conn;

    public function __construct(){
        $this->conn = (new Database())->getConnection();
    }

    private function updateSections($home, $about, $projects){

        try{

        }
        catch(PDOException $e){

            echo "Sorry, there was an error while updating sections. " . $e->getMessage();
        }
    }

    private function getSections(){

    }
}
?>