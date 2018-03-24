<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="keywords" content="Клиника, Ветеринарная, Животные, лечить">
    <title><?php pageTitle(); ?> | <?php siteName(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="css/linearicons.css">=
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="wrap">

    <header class="default-header">
                        <div class="container">
                    <div class="header-wrap">
                        <div class="header-top d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="/"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="main-menubar d-flex align-items-center">
                                <nav class="hide">
                                    <?php navMenu(); ?>
                                </nav>
                                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
    </header>

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center">
                <div class="banner-content col-lg-6 col-md-12">
                    <h1 class="text-uppercase">
                        Ветеринарная клиника 
                    </h1>
                        <p>
                            Мы оперируем, прививаем, восстанавливаем и спасаем жизни. <br> Круглосуточная клиника готова к срочным операциям даже ночью.
                        </p>
                        <button class="primary-btn2 mt-20 text-uppercase ">Предварительная запись<span class="lnr lnr-arrow-right"></span>
                        </button>
                </div>
                    <div class="col-lg-6 d-flex align-self-end img-right">
                        <img class="img-fluid" src="img/header-img.png" alt="">
                    </div>
            </div>
        </div>
    </section>
            <!-- End banner Area -->

    <article>
        <?php pageContent(); ?>
    </article>

            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row footer-bottom d-flex justify-content-between">
                        <p class="col-lg-8 col-sm-12 footer-text m-0">
                           &copy;<?php echo date('Y'); ?> <?php siteName(); ?>.<br><?php siteVersion(); ?>
                        </p>
                        <div class="col-lg-4 col-sm-12 footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->

            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/jquery.sticky.js"></script>
            <script src="js/parallax.min.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/waypoints.min.js"></script>
            <script src="js/jquery.counterup.min.js"></script>
            <script src="js/main.js"></script>
</div>
</body>
</html>