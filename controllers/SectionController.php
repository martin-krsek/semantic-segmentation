<?php

require_once("Database.php");

class SectionController{

    private PDO $conn;

    public function __construct(){
        $this->conn = (new Database())->getConnection();
    }

    public function updateSections($home, $about, $projects){

        try{

            $sql = "UPDATE sections SET content = ? WHERE section = 'home';
                    UPDATE sections SET content = ? WHERE section = 'about';
                    UPDATE sections SET content = ? WHERE section = 'projects'";
            
            $stmnt = $this->conn->prepare($sql);
            $stmnt->execute([$home, $about, $projects]);

        }
        catch(PDOException $e){

            echo "Sorry, there was an error while updating sections. " . $e->getMessage();
        }
    }

    public function getSections(){

        try{

            $sql = "SELECT * FROM sections";
            
            $stmnt = $this->conn->prepare($sql);
            $stmnt->execute();

            $result = $stmnt->fetchAll(PDO::FETCH_ASSOC);
            $sections = [];
            
            foreach($result as $key=>$value){
            
                $sections[$value["section"]] = $value["content"];
            }
                
            return $sections;

        }
        catch(PDOException $e){

            echo "Sorry, there was an error while retrieving sections. " . $e->getMessage();
        }
    }
}
?>