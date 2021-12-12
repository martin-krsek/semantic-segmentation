<?php 

# path goes from index.php, as main-page.php is included in index.php
require_once($_SERVER['DOCUMENT_ROOT']."/controllers/SectionController.php");
$sectionController = new SectionController();
$sections = $sectionController->getSections();
?>
        
<!-- hero section -->
<?php include 'partials/sections/hero.html'; ?>

<!-- home section -->
<?php include 'partials/sections/home.php'; ?>

<!-- gallery section -->
<?php include 'partials/sections/gallery.html'; ?>

<!-- downloads section -->
<?php include 'partials/sections/download.html'; ?>

<!-- about section -->
<?php include 'partials/sections/about.php'; ?>

<!-- projects section -->
<?php include 'partials/sections/projects.php'; ?>