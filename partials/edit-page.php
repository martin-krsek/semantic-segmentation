<!-- navigation area -->
<?php include 'sections/admin-navigation.html'; ?>

<!-- hero section -->
<?php include 'sections/hero.html'; ?>

<form onsubmit="updateSections(event);">
    <section id="home-edit" class="pb-16">
        <div class="wrapper centered-text clearfix h-full">
            <h2 class="opacity-30">
                <div class="inline">*</div>Home Section<div class="inline">*</div>
            </h2>
        <textarea onchange="updateHomePreview()" class="mb-4 pl-1.5 py-1.5 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50 bg-gray-100 h-5/6" name="home-textarea" id="home-textarea" cols="30" rows="5">
            <h1>Semantic Segmentation is...</h1>
            <p>Tiramisu sesame snaps gummies sweet roll pudding sweet caramels toffee topping. Sugar plum donut tart sweet toffee shortbread sugar plum candy bonbon. Gingerbread carrot cake jelly powder pastry gummi bears. Marshmallow danish jelly apple pie chocolate bar. Sweet pastry brownie cotton candy lollipop pie soufflé. Gummi bears sugar plum marzipan wafer marzipan sweet jujubes pudding marzipan. Ice cream lemon drops biscuit croissant tootsie roll croissant jelly chupa chups soufflé. Chupa chups dessert cake ice cream sweet cupcake wafer marshmallow. Brownie pie pie sugar plum lemon drops. Carrot cake lollipop ice cream caramels tiramisu marshmallow chocolate cake.</p>
            <p>Wafer dragée cotton candy powder pastry oat cake bonbon. Tootsie roll donut powder marzipan muffin muffin sugar plum. Chocolate cake biscuit soufflé lollipop cotton candy donut cake chocolate bar. Sweet roll topping cheesecake shortbread bonbon toffee shortbread macaroon. Sugar plum cotton candy chocolate bar sesame snaps cheesecake. Cotton candy oat cake shortbread caramels tart gummies marshmallow danish. Macaroon jujubes pastry donut lemon drops biscuit. Ice cream halvah soufflé toffee jujubes. Jelly beans sweet sweet roll oat cake candy.</p>
            <p>Chocolate bar caramels cookie cookie macaroon. Dessert caramels croissant cake soufflé tart dessert danish jelly. Fruitcake chocolate tart gummies cheesecake marzipan bonbon cookie. Bear claw brownie macaroon icing cake gingerbread liquorice toffee. Bear claw icing tiramisu tiramisu marzipan. Candy jelly-o pastry gummi bears ice cream gingerbread gummies brownie.</p>
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
                <textarea id="about-textarea" onchange="updateAboutPreview()" class="mb-4 pl-1.5 py-1.5 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50 bg-gray-100 text-black h-5/6" name="about-textarea" cols="30" rows="5">
                    <h1>This is about section</h1>
                    <p>Pudding marzipan icing jelly beans marshmallow. Sweet cake brownie pastry pie lollipop jelly. Tootsie roll shortbread sugar plum powder cookie. Sugar plum chocolate bar sweet lemon drops topping icing croissant sesame snaps tart. Gummi bears soufflé macaroon icing liquorice toffee icing cheesecake gummies. Cotton candy pudding dessert chocolate powder pie. Cookie cupcake gummi bears jujubes tootsie roll. Liquorice soufflé tiramisu gummies jujubes cake. Cake jelly-o toffee cookie jelly-o sesame snaps sweet lollipop. Cake candy canes marzipan wafer cotton candy liquorice chocolate bar lollipop. Jelly pudding cupcake oat cake cotton candy soufflé. Jelly beans dessert brownie ice cream pie halvah topping sugar plum caramels.</p>
                    <p>Cake gummies gummi bears chupa chups jelly tiramisu pie. Marshmallow biscuit cheesecake marzipan dragée. Sweet roll cupcake gingerbread dessert fruitcake bear claw muffin. Topping wafer wafer gummi bears sesame snaps sesame snaps chocolate cake jelly beans sugar plum. Sweet gingerbread biscuit brownie tootsie roll. Croissant jelly-o caramels topping cupcake pastry tart carrot cake lemon drops. Candy liquorice dragée powder candy. Donut soufflé cake macaroon sweet roll topping candy. Dessert bonbon chupa chups candy dragée donut dragée marzipan ice cream. Marzipan wafer marzipan powder icing pudding halvah. Jujubes cheesecake pastry caramels jujubes marzipan. Candy canes jelly beans liquorice sweet roll oat cake cupcake lemon drops topping.</p>
                    <p>Tootsie roll oat cake carrot cake tootsie roll cheesecake candy canes oat cake tart chocolate cake. Bear claw toffee croissant croissant caramels candy canes. Fruitcake dessert tootsie roll halvah chocolate caramels bonbon. Wafer marshmallow pie fruitcake caramels marshmallow cupcake.</p>
                </textarea>
        </div>
    </section>

    <section id="projects-edit" class="pb-16">
        <div class="wrapper centered-text clearfix h-full">
            <h2 class="opacity-30">
                <div class="inline">*</div>Projects Section<div class="inline">*</div>
            </h2>
                <textarea id="projects-textarea" onchange="updateProjectsPreview()" class="mb-4 pl-1.5 py-1.5 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50 bg-gray-100 h-5/6" name="projects-textarea" cols="30" rows="5">
                    <h1>This is projects section</h1>
                    <p>Tiramisu pie lemon drops pastry toffee gummies candy canes biscuit biscuit. Dragée danish bonbon liquorice chocolate wafer wafer. Sesame snaps cake wafer gummies dessert biscuit caramels.</p>
                    <li><a href="#">Example Project</a></li>
                    <li><a href="#">Eye Project</a></li>
                    <li><a href="#">Another Project</a></li>
                </textarea>
        </div>
    </section>

    <button type="submit">Save changes</button>
</form>

<!--kysucan, daj prec ked zpojazdnis db a obsah sections.js daj do admin.js-->
<script src="../js/sections.js"></script>

<!-- footer area -->
<?php include 'sections/footer.html'; ?>