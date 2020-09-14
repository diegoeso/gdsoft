<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="ie=edge" http-equiv="X-UA-Compatible"/>
        <title>
            GDSoft | Gerencia y Desarrollo de Software
        </title>
        <!-- compartir -->
        <meta content="https://www.gdsoft.com.mx/" property="og:url"/>
        <meta content="es_MX" property="og:locale"/>
        <meta content="website" property="og:type"/>
        <meta content="GDSoft | Gerencia y Desarrollo de Software" property="og:title"/>
        <meta content="En GDSoft México nos especializamos en dar soliciones tecnologicas e innovadoras, realizamos
    diseño web y diseño de paginas web, desarrollo de tiendas virtuales, administrador de contenidos WordPress y posicionamiento web en Mexico, desarrollamos software a la medida de tus necesidades." property="og:description"/>
        <meta content="GDSoft México" property="og:site_name"/>
        <meta content="assets/img/gdsoft.png" property="og:image"/>
        <meta content="Index,Follow" name="robots"/>
        <meta content="Diseño de paginas web, diseño web, desarrollo web, tiendas en linea, ventas, desarrollo de software, aplicaciones moviles, android, marketing digital" name="keywords"/>
        <link href="https://www.gdsoft.com.mx/" rel="shortlink"/>
        <meta content="GDSoft México" name="author"/>
        <!-- -->
        <!-- CSS
        ================================================== -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Open+Sans:300|Roboto+Condensed:300|Roboto:300,400,500,700" rel="stylesheet"/>
        <!-- Fontawesome Icon font -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="assets/css/et-line-font.css" rel="stylesheet"/>
        <!-- Twitter Bootstrap css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- jquery.fancybox  -->
        <link href="assets/css/jquery.fancybox.css" rel="stylesheet"/>
        <!-- animate -->
        <link href="assets/css/animate.css" rel="stylesheet"/>
        <!-- Main Stylesheet -->
        <link href="assets/css/main.css" rel="stylesheet"/>
        <!-- media-queries -->
        <link href="assets/css/media-queries.css" rel="stylesheet">
        </link>
    </head>
    <body id="body">
        <div id="preloader">
            <img alt="Preloader" src="assets/img/preloader.gif">
            </img>
        </div>
        <?=$this->include('layout/navbar')?>

        <?php $this->renderSection('content')?>


        <div class="container">
            <a href="javascript:void(0);" id="back-top" style="color: #F16623;">
                <i class="fa fa-angle-up fa-4x">
                </i>
            </a>
        </div>

        <?php $this->include('layout/footer')?>
        <!-- Essential jQuery Plugins
        ================================================== -->
        <script src="assets/js/modernizr-2.6.2.min.js">
        </script>
        <!-- Main jQuery -->
        <script src="assets/js/jquery-1.11.1.min.js">
        </script>
        <!-- Single Page Nav -->
        <script src="assets/js/jquery.singlePageNav.min.js">
        </script>
        <!-- Twitter Bootstrap -->
        <script src="assets/js/bootstrap.min.js">
        </script>
        <!-- jquery.fancybox.pack -->
        <script src="assets/js/jquery.fancybox.pack.js">
        </script>
        <!-- jquery.mixitup.min -->
        <script src="assets/js/jquery.mixitup.min.js">
        </script>
        <!-- jquery.parallax -->
        <script src="assets/js/jquery.parallax-1.1.3.js">
        </script>
        <!-- jquery.countTo -->
        <script src="assets/js/jquery-countTo.js">
        </script>
        <!-- jquery.appear -->
        <script src="assets/js/jquery.appear.js">
        </script>
        <!-- Google Map -->
        <!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
        <!-- jquery easing -->
        <script src="assets/js/jquery.easing.min.js">
        </script>
        <!-- jquery easing -->
        <script src="assets/js/wow.min.js">
        </script>
        <script>
            var wow = new WOW({
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120,          // distance to the element when triggering the animation (default is 0)
            mobile: false,       // trigger animations on mobile devices (default is true)
            live: true        // act on asynchronously loaded content (default is true)
        }
        );
        wow.init();
        </script>
        <!-- Custom Functions -->
        <script async="" src="assets/js/custom.js">
        </script>
        <script src="assets/js/jquery.vide.min.js">
        </script>
    </body>
</html>