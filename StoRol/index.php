<?php 
  session_start(); 
  include 'assets/php/funkcje.php';
  include './assets/php/sql.php';

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MKLstok Roll</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logoIcon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand - v1.1.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="mailto:produkcja@mkl.pl">produkcja@mkl.pl</a>
                <i class="icofont-phone"></i> +48 788 260 669
            </div>
            <div class="social-links">
                <?php 
              if (isset($_SESSION['username'])) {
                echo '<a href="login/includes/logout.php" class="twitter"><i class="icofont-logout"></i>logout</a>';
              } else {
                echo '<a style="cursor:pointer" onclick="show_login()"><i class="icofont-login"></i>login</a>';
              }
            ?>

                <!-- <i class="icofont-login" onclick="show_login()"></i> -->

                <!-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a> -->
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.html"><img src="assets/img/logoStok.png" width="150"
                        alt="MKLstok roll"></a></h1>

            <!-- <h1 class="logo mr-auto"><a href="index.html">BizLand<span>.</span></a></h1> -->

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#about">O Nas</a></li>
                    <li><a href="#prztergi">Przetargi</a></li>
                    <li><a href="#contact">Kontakt</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->



    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Witamy<img src="assets/img/logoStok.png" width="400" hight="500" alt="MKLstok roll">
            </h1>
            <h2>PRODUKCJA WYROBÓW METALOWYCH</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=nmQ6B1KewTs" class="venobox btn-watch-video"
                    data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <?php 
          if (isset($_SESSION['username'])) {
            include 'przetarg/index.php';
          }
        ?>

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <!-- <h2>O NAS</h2> -->
                    <h3>Dowiedz się więcej <span>O Nas</span></h3>
                    <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/mkl1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> -->
                        <!-- <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p> -->
                        <ul style="font-style: italic">
                            <li>
                                <!-- <i class="bx bx-store-alt"></i> -->
                                <div>
                                    <h5> > Wydajność do 500 ton konstrukcji stalowych miesięcznie</h5>
                                    <!-- <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade
                                    </p> -->
                                </div>
                            </li>
                            <li>
                                <!-- <i class="bx bx-images"></i> -->
                                <div>
                                    <h5> > Produkcja nierdzewnych elementów stalowych i obróbka krat (spawane,
                                        prasowane,
                                        ząbkowane) </h5>
                                    <!-- <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna
                                        pasata redi</p> -->
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5> > Wysoko wykwalifikowani i certyfikowani spawacze</h5>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5> > Wysokiej jakości komora do piaskowania</h5>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5> > Własna malarnia konstrukcji stalowych </h5>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5> > Wszystkie wymagane WPS i WPQR</h5>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5> > EN 1090 – certyfikat kontroli produkcji i EN ISO 3834 – certyfikat
                                        spawalniczy
                                    </h5>
                                </div>
                            </li>
                        </ul>
                        <!-- <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p> -->
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span data-toggle="counter-up">198</span>
                            <p>Klienci</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span data-toggle="counter-up">91</span>
                            <p>Zrealizowane Projekty</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-world"></i>
                            <span data-toggle="counter-up">23</span>
                            <p>Kraje gdzie działamy</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-users-alt-5"></i>
                            <span data-toggle="counter-up">205</span>
                            <p>Pracownicy</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="prztergi" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <!-- <h2>Services</h2> -->
                    <h3>Sprawdź<span> Przetargi</span></h3>
                    <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
                </div>

                <div class="row">

                    <?php
                    $result = db_query($query);
                    while ($row = $result->fetch_assoc()) { 
                
                    echo '
                        <div id="box'.$row['id'].'" class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div style="width:100%" class="icon-box">
                                <div class="icon"><a href="upload/'.$row['id'].'.pdf" target="_blank"><i class="bx bx-file"></i></a></div>
                                <h4><a href="upload/'.$row['id'].'.pdf" target="_blank">'.$row['temat'].'</a></h4>
                                <p>'.$row['opis'].'</p>
                            </div>
                        </div>';
                        }
                    ?>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <!-- <h2>Kontakt</h2> -->
                    <h3><span>Skontaktuj się z nami</span></h3>
                    <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Adres:</h3>
                            <p>Łazy 500, 21-400 Łuków</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>produkcja@mkl.pl</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+48 788 260 669</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-12 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2461.4175305401395!2d22.417508851776756!3d51.90809297960329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47220211b08934c1%3A0x214e579dd02db04f!2s%C5%81azy%20500%2C%2021-400%20Podgaj!5e0!3m2!1spl!2spl!4v1606252467036!5m2!1spl!2spl"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span style="color:#971C0E">MKL</span></strong><span
                    style="color:lightslategray">stock roll</span> All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Modal content -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span style="float: right" class="close">&times;</span>
            <div id="modKurs">
                <div id="errorwarn"></div>
            </div>
        </div>
    </div>

    <!-- <div id="myModalFull" class="modal_fullWidth">
        <div class="modal-content">
            <span style="float: right" class="close">&times;</span>
            <div id="modKurs">
                <div id="errorwarn"></div>
            </div>
        </div>
    </div> -->


    <!--End Modal content -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script type="text/JavaScript" src="login/js/sha512.js"></script>
    <script type="text/JavaScript" src="login/js/forms.js"></script>


</body>

</html>

<script>
/////////////////////// My Scripts ////////////////////////////




function show_login() {
    $('#myModal').fadeToggle();

    $.post('assets/php/loginModal.php', {}, function(data) {
        $('#modKurs').html(data);
    });
}

function usun(id) {
    $.post('przetarg/delete.php', {
        id: id
    }, function(data) {
        $('#prztargi').html(data);
        $('#box'+id).remove();

    });
}

function edit(id) {
    $.post('przetarg/edit.php', {
        id: id
    }, function(data) {
        $('#addPrzetarg').html(data);
        $('html, body').animate({ scrollTop: $('#addPrzetarg').offset().top }, 'slow');

    });
}

// function update(id, temat, opis) {
//     alert(id + temat + opis);
//     $.post('przetarg/update.php', {
//         id: id, temat: temat, opis: opis
//     }, function(data) {
//         alert('super');
//         // $('#addPrzetarg').html(data);
//         // $('html, body').animate({ scrollTop: $('#addPrzetarg').offset().top }, 'slow');

//     });
// }

</script>