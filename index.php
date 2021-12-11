<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>One page site with Simple Responsive Template</title>
<meta name="description" content="This is a one page site built with Simple Responsive Template. Simple Responsive Template is a template for responsive web design. Mobile first, responsive grid layout, toggle menu, navigation bar with unlimited drop downs, responsive slideshow">
<meta name="keywords" content="">

<!-- Mobile viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

<link rel="shortcut icon" href="images/favicon.ico"  type="image/x-icon" />

<!-- CSS-->
<!-- Google web fonts. You can get your own bundle at http://www.google.com/fonts. Don't forget to update the CSS accordingly!-->
<link href='http://fonts.googleapis.com/css?family=Dosis:500,600|Arvo|La+Belle+Aurore' rel='stylesheet' type='text/css'>

<!--<link rel="stylesheet" href="css/normalize.css">-->
<link rel="stylesheet" href="tailwind.css">
<link rel="stylesheet" href="js/flexslider/flexslider.css" />
<link rel="stylesheet" href="css/onepage-style.css">

<!-- end CSS-->
    
<!-- JS-->
<script src="js/libs/modernizr-2.6.2.min.js"></script>
<!-- end JS-->

</head>

<body>
    <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

    <!-- navigation area -->
    <?php include 'partials/sections/navigation.html'; ?>

    <?php include 'partials/main-page.php'; ?>

    <!-- admin login section -->
    <?php include 'partials/sections/login.html'; ?>

    <!-- footer area -->
    <?php include 'partials/sections/footer.html'; ?>





    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>
    <script defer src="js/flexslider/jquery.flexslider-min.js"></script>

    <!-- fire ups  -->
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>

    <!-- menu scrolling  -->
    <script type="text/javascript">
    $('a[href*=#]').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top -80}, 500);
        return false;
    });
    </script>

    <!-- load flexslider on larger screens  -->
    <script type="text/javascript">/*by J. Hogue https://coderwall.com/p/_ldtkg*/
    /* onresize handler that waits until a window resize event has stopped before firing – doesn't fire extraneously */
    function on_resize(c,t){ onresize=function(){ clearTimeout(t);t = setTimeout(c,100)}; return c };
    /* Check these so we dont load the same things twice */
    addthis_loaded = false;

    /* Load content progressively. Must remember to also load them for IE 7 and 8, since they do not support media queries or the getComputedStyle function */
    on_resize(function() {

        /* "Watch" the content of the body:after element. Will change as media queries fire. */
        mq_tag = window.getComputedStyle(document.body,':after').getPropertyValue('content');
        //console.log( "media query tag=" + mq_tag );

        /* Load AddThis features for larger screens */
        if ( mq_tag.indexOf("large") !=-1 && addthis_loaded == false ) {
        /* We could also check to see if the target div was empty: !$.trim( $('#addthis').html() ).length */

            $('#js-insert-wallpapers').load('onepage-flexslider.html');
            $.getScript('http://s7.addthis.com/js/250/addthis_widget.js#pubid=XXX',
            function(){
                addthis.init(); //callback function for script loading
            });

            addthis_loaded = true;
            //console.log( "! load-addthis has fired" );
        }

    })(); // the magic extra () makes this function fire on page load
    </script>
</body>
</html>
