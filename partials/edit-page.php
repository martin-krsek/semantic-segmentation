<!-- navigation area -->
<?php include 'sections/admin-navigation.html'; ?>

<!-- hero section -->
<?php include 'sections/hero.html'; ?> 

<?php 

    require_once("../controllers/SectionController.php");
    $sectionController = new SectionController();
    $sections = $sectionController->getSections();
?>

<!-- kysucan, DELETE ked rozbehas docker db -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<form onsubmit="updateSections(event);">
    <section id="home-edit" class="pb-16">
        <div class="wrapper centered-text clearfix h-full">
            <h2 class="opacity-30">
                <div class="inline">*</div>Home Section<div class="inline">*</div>
            </h2>
        <?php
            echo $sections["home"];
        ?> 
        <textarea onchange="updateHomePreview()" class="mb-4 pl-1.5 py-1.5 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50 bg-gray-100 h-5/6" name="home-textarea" id="home-textarea" cols="30" rows="5">
        <?php
            echo $sections["home"];
        ?> 
        </textarea>
        </div>
    </section>

    <div class='pointer-events-none opacity-50'>
        <!-- gallery section -->
        <?php include 'sections/gallery.html'; ?>

        <!-- downloads section -->
        <?php include 'sections/download.html'; ?>
    </div>

    <section id="about-edit" class="background-blue pb-16">
        <div class="wrapper centered-text clearfix h-full">
            <h2 class="opacity-30">
                <div class="inline">*</div>About Section<div class="inline">*</div>
            </h2>
            <?php
                echo $sections["about"];
            ?>
            <textarea id="about-textarea" onchange="updateAboutPreview()" class="mb-4 pl-1.5 py-1.5 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50 bg-gray-100 text-black h-5/6" name="about-textarea" cols="30" rows="5">
            <?php
                echo $sections["about"];
            ?>
            </textarea>
        </div>
    </section>

    <section id="projects-edit" class="pb-16">
        <div class="wrapper centered-text clearfix h-full">
            <h2 class="opacity-30">
                <div class="inline">*</div>Projects Section<div class="inline">*</div>
            </h2>
            <?php
                echo $sections["projects"];
            ?> 
            <textarea id="projects-textarea" onchange="updateProjectsPreview()" class="mb-4 pl-1.5 py-1.5 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50 bg-gray-100 h-5/6" name="projects-textarea" cols="30" rows="5">
            <?php
                echo $sections["projects"];
            ?> 
            </textarea>
        </div>
    </section>

    <button type="submit">Save changes</button>
</form>

<!--kysucan, daj prec ked zpojazdnis db a obsah sections.js daj do admin.js-->
<script src="../js/sections.js"></script>

<!-- footer area -->
<?php include 'sections/footer.html'; ?>