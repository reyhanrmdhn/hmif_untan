<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Informatics Study Club | HMIF</title>

    <!-- Fav Icon -->
    <link rel="icon" href="<?= base_url() ?>assets/images/logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="<?= base_url() ?>assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/flaticon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/owl.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/color.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/load.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

    <div class="boxed_wrapper">

        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <!-- <div class="preloader-close">x</div> -->
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <!-- <div class="spinner">
                        </div> -->
                        <img class="animate" src="<?= base_url() ?>assets/images/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header header-style-four">
            <!-- header-top -->
            <div class="auto-container">
                <div class="inner-container">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.html"><img src="<?= base_url() ?>assets/images/logo-isc.png" alt=""></a></figure>
                    </div>
                    <div class="header-top-three">
                        <div class="top-inner clearfix">
                            <ul class="info pull-left clearfix">
                                <li><i class="fas fa-phone-volume"></i><a href="tel:0895600225408">(+62) 895-6002-25408</a></li>
                                <li><i class="far fa-envelope"></i><a href="mailto:info@example.com">isc@hmif-untan.tech</a></li>
                            </ul>
                            <div class="right-column pull-right clearfix">
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-spotify"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- header-lower -->
                    <div class="header-lower">
                        <div class="outer-box clearfix">
                            <div class="menu-area pull-right clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                </div>
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation scroll-nav clearfix">
                                            <li class="current"><a href="#home">Home</a></li>
                                            <li><a href="#bidang">Bidang</a></li>
                                            <li><a href="#benefit">Benefit</a></li>
                                            <li><a href="#faq">FAQ</a></li>
                                            <li><a href="#daftar">Daftar Kelas</a></li>
                                            <li><a href="#kontak">Kontak</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <figure class="sticky-logo pull-left">
                            <a href="index.html"><img src="<?= base_url() ?>assets/images/logo-isc-white.png" alt=""></a>
                        </figure>
                        <div class="menu-area pull-right clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?= base_url() ?>assets/images/logo-isc-white.png" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-section -->
        <section class="banner-style-four" id="home">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-23.png);"></div>
            <div class="anim-icon">
                <div class="icon icon-1 float-bob-y" style="background-image: url(assets/images/shape/anim-icon-14.png);"></div>
                <!-- <div class="icon icon-2 rotate-me" style="background-image: url(assets/images/shape/anim-icon-14.png);"></div> -->
                <div class="icon icon-3 float-bob-x" style="background-image: url(assets/images/shape/anim-icon-15.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 offset-lg-6 content-column">
                        <div class="content-box">
                            <h3 style="font-family: 'Montserrat', sans-serif;">Informatics</h3>
                            <h2 style="font-family: 'Montserrat', sans-serif;">Study Club</h2>
                            <p>
                                Informatics Study Club adalah sebuah forum mahasiswa Teknik Informatika untuk saling belajar, berdiskusi dan berbagi pengetahuan yang berkaitan dengan IT khususnya pada bidang Pemrograman Web, Desain Grafis dan Technopreneur
                            </p>
                            <div class="btn-box">
                                <a href="<?= base_url('auth') ?>" class="theme-btn btn-three">Daftar <span class="symble">+</a>
                                <a href="<?= base_url('auth') ?>" class="theme-btn btn-two">Masuk <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- feature-section -->
        <section class="feature-section centred" id="bidang">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="sec-title-2 style-two">
                        <h5>Bidang Study Club</h5>
                        <p>Terdapat 3 Bidang Study Club yang bisa kamu pilih sesuai minat kamu</p>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <figure class="icon-box"><img src="<?= base_url() ?>assets/images/icons/icon-10.png" alt=""></figure>
                                    <h3>Web Programming</h3>
                                    <p>
                                        Web Programming adalah adalah proses menulis, mencoba, memeriksa dan memperbaiki (debug), serta memelihara kode untuk membuat sebuah program berbasis web
                                        <br><br>
                                    </p>
                                    <!-- <div class="link"><a class="theme-btn btn-nine text-white" href="index-4.html">Read More</a></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <figure class="icon-box"><img src="<?= base_url() ?>assets/images/icons/icon-11.png" alt=""></figure>
                                    <h3>Desain Grafis & UI</h3>
                                    <p>
                                        Desain grafis merupakan suatu bentuk dari komunikasi visual yang memanfaatkan gambar sebagai media untuk menyampaikan pesan atau informasi seefektif mungkin.
                                        Sedangkan UI atau User Interface adalah ilmu tentang tata letak grafis suatu aplikasi.
                                    </p>
                                    <!-- <div class="link"><a class="theme-btn btn-nine text-white" href="index-4.html">Read More</a></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 feature-block">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <figure class="icon-box"><img src="<?= base_url() ?>assets/images/icons/icon-12.png" alt=""></figure>
                                    <h3>Startup & Technopreneur</h3>
                                    <p>
                                        Technopreneur adalah perpaduan dari dua kata technology dan entrepreneur yang dapat diartikan adalah bisnis berbasis teknologi.
                                        Technopreneur bukan berbicara tentang <i>penemuan</i> namun berbicara soal <i>inovasi</i> dalam rangka menggapai kesuksesan.
                                    </p>
                                    <!-- <div class="link"><a class="theme-btn btn-nine text-white" href="index-4.html">Read More</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->

        <!-- chooseus-style-three -->
        <section class="about-style-four centred" id="benefit">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-64.png);"></div>
            <div class="auto-container">
                <div class="sec-title style-two">
                    <h5>Keuntungan dari ISC</h5>
                    <h2>Apa saja yang akan kamu dapatkan</h2>
                    <!-- <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div> -->
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 service-block">
                        <div class="service-block-three wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="light-icon"><img src="<?= base_url() ?>assets/images/icons/icon-8.png" alt=""></figure>
                                <div class="icon-box"><i class="flaticon-message"></i></div>
                                <h3><a href="advertising-marketing.html">E-Sertifikat</a></h3>
                                <p>Simple easy distinguish when our power right.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 service-block">
                        <div class="service-block-three wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="light-icon"><img src="<?= base_url() ?>assets/images/icons/icon-8.png" alt=""></figure>
                                <div class="icon-box"><i class="flaticon-quotes"></i></div>
                                <h3><a href="advertising-marketing.html">Ilmu yang Bermanfaat</a></h3>
                                <p>Simple easy distinguish when our power right.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 service-block">
                        <div class="service-block-three wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="light-icon"><img src="<?= base_url() ?>assets/images/icons/icon-8.png" alt=""></figure>
                                <div class="icon-box"><i class="flaticon-product"></i></div>
                                <h3><a href="advertising-marketing.html">Doorprize</a></h3>
                                <p>Simple easy distinguish when our power right.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-style-three end -->

        <!-- faq-section -->
        <section class="faq-section" id="faq">
            <div class="bg-layer" style="background-image: url(assets/images/background/faq-bg.png);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-19.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-4 content-column">
                        <div class="content-box">
                            <div class="sec-title style-two light">
                                <h5>CLIENT FAQ’S</h5>
                                <h2>Questions and answers for <br />common ML queries</h2>
                                <div class="divider" style="background-image: url(assets/images/icons/divider-2.png);"></div>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h5>What is the difference between a Data Scientist, Data Analyst?</h5>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="text">
                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h5>Why focus on Data Science?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h5>Can i have multiple activities in single feature?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h5>What is the difference between a Data Scientist, Data Analyst?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h5>What is the difference between a Data Scientist, Data Analyst?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h5>What is the difference between a Data Scientist, Data Analyst?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h5>What is the difference between a Data Scientist, Data Analyst?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h5>What is the difference between a Data Scientist, Data Analyst?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-section end -->

        <!-- project-style-three -->
        <section class="project-style-three centred" id="daftar">
            <div class="auto-container">
                <div class="sec-title style-two">
                    <h5>Study Class</h5>
                    <h2>Pendaftaran Pelatihan pada ISC</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                    <div class="project-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?= base_url() ?>assets/images/gallery/project-4.jpg" alt="">
                                <a href="project-details.html" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                            </figure>
                            <div class="lower-content">
                                <figure class="icon-box"><img src="<?= base_url() ?>assets/images/icons/coding.png" alt=""></figure>
                                <h3><a href="project-details.html">Artificial Intelligence</a></h3>
                                <p>Lorem ipsum amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                                <div class="btn-box">
                                    <a href="project-details.html" class="theme-btn btn-eight">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?= base_url() ?>assets/images/gallery/project-5.jpg" alt="">
                                <a href="project-details.html" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                            </figure>
                            <div class="lower-content">
                                <figure class="icon-box"><img src="<?= base_url() ?>assets/images/icons/startup2.png" alt=""></figure>
                                <h3><a href="project-details.html">Rebot Technology View</a></h3>
                                <p>Lorem ipsum amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                                <div class="btn-box">
                                    <a href="project-details.html" class="theme-btn btn-eight">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?= base_url() ?>assets/images/gallery/project-6.jpg" alt="">
                                <a href="project-details.html" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                            </figure>
                            <div class="lower-content">
                                <figure class="icon-box"><img src="<?= base_url() ?>assets/images/icons/app.png" alt=""></figure>
                                <h3><a href="project-details.html">Web Programming</a></h3>
                                <p>Lorem ipsum amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                                <div class="btn-box">
                                    <a href="project-details.html" class="theme-btn btn-eight">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-style-three end -->

        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad centred" id="kontak">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-68.png);"></div>
            <div class="auto-container">
                <div class="sec-title style-two">
                    <h5>SEND MESSAGE</h5>
                    <h2>We’d love to hear from you <br />for your massage</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 inner-column">
                        <div class="form-inner">
                            <form method="post" action="sendemail.php" id="contact-form" class="default-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" name="phone" required="" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-seven" type="submit" name="submit-form">Send Massage</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->


        <!-- main-footer -->
        <footer class="main-footer footer-style-four">
            <div class="anim-icon">
                <div class="icon icon-1" style="background-image: url(assets/images/shape/anim-icon-18.png);"></div>
                <div class="icon icon-2" style="background-image: url(assets/images/shape/anim-icon-19.png);"></div>
                <div class="icon icon-3" style="background-image: url(assets/images/shape/anim-icon-20.png);"></div>
            </div>
            <div class="auto-container">
                <div class="footer-top-two">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index-2.html"><img src="<?= base_url() ?>assets/images/logo-isc-white.png" alt=""></a></figure>
                                <div class="text">
                                    <p>We will likely assistance organizations keep up accomplish best class positions their separate enterprises & our group works happen that delights need to be disavowed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Service Link</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index-2.html">Business</a></li>
                                        <li><a href="index-2.html">Agency</a></li>
                                        <li><a href="index-2.html">Social Media</a></li>
                                        <li><a href="index-2.html">Branding</a></li>
                                        <li><a href="index-2.html">Design</a></li>
                                        <li><a href="index-2.html">Search engine</a></li>
                                        <li><a href="index-2.html">Online support</a></li>
                                        <li><a href="index-2.html">Development</a></li>
                                        <li><a href="index-2.html">Pay per click</a></li>
                                        <li><a href="index-2.html">Event activation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget ml-40">
                                <div class="widget-title">
                                    <h3>Contact Us</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li>
                                            <i class="far fa-paper-plane"></i>
                                            <p>124, Queens Walk 2nd Cross Denmark</p>
                                        </li>
                                        <li>
                                            <i class="fas fa-headphones"></i>
                                            <p><a href="tel:0088827240">+00-888-27-240</a></p>
                                        </li>
                                        <li>
                                            <i class="far fa-envelope"></i>
                                            <p><a href="mailto:support@info.com">support@info.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget service-widget">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index-2.html">Advertising & Marketing</a></li>
                                        <li><a href="index-2.html">Healthcare & Medicine</a></li>
                                        <li><a href="index-2.html">Financials & Banking</a></li>
                                        <li><a href="index-2.html">Data Warehousing</a></li>
                                        <li><a href="index-2.html">Media & Entertainment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner clearfix">
                        <div class="copyright pull-left">
                            <p>Copyright &copy; <a href="index-2.html">HMIF FT UNTAN</a>, All Rights Reserved.</p>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <ul class="footer-nav clearfix">
                                <li><a href="index-2.html">Privacy Policy</a></li>
                                <li><a href="index-2.html">Terms & Conditions</a></li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-3.html"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-3.html"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!-- scroll to top -->
        <button class="scroll-top style-two scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>


    </div>


    <!-- jequery plugins -->
    <script src="<?= base_url() ?>assets/js/jquery.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/owl.js"></script>
    <script src="<?= base_url() ?>assets/js/wow.js"></script>
    <script src="<?= base_url() ?>assets/js/validation.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.fancybox.js"></script>
    <script src="<?= base_url() ?>assets/js/appear.js"></script>
    <script src="<?= base_url() ?>assets/js/scrollbar.js"></script>
    <script src="<?= base_url() ?>assets/js/tilt.jquery.js"></script>
    <script src="<?= base_url() ?>assets/js/isotope.js"></script>
    <script src="<?= base_url() ?>assets/js/bxslider.js"></script>
    <script src="<?= base_url() ?>assets/js/pagenav.js"></script>
    <!-- main-js -->
    <script src="<?= base_url() ?>assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>