<?php

require_once("../controllers/SectionController.php");

$sectionController = (new SectionController());

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $sectionController->updateSections($_POST["home"], $_POST["about"], $_POST["projects"]);
}

?>