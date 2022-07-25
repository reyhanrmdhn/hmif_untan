<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webinar Series | HMIF UNTAN</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo2.png" type="image/x-icon">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/all.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/font/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
    <!-- odometer -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/odometer.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slick.css">
    <!-- modal video / video popup -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/modal-video.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <!-- style for this template -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <!-- responsive style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
    <link rel="preconnect" href="<?= base_url() ?>https://fonts.googleapis.com">
    <link rel="preconnect" href="<?= base_url() ?>https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar-nav">
    <!-- preloader begin-->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader end -->
    <!-- scroll to top -->
    <div class="scroll-to-top my-btn">
        <i class="fas fa-long-arrow-alt-up"></i>
    </div>
    <!-- scroll to top -->
    <!-- header begin -->
    <div class="header header-3">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9">
                        <div class="top-left">
                            <ul>
                                <li><a href="<?= base_url() ?>#"><i class="fas fa-envelope"></i>webinar@hmif-untan.tech</a></li>
                                <li><a href="<?= base_url() ?>#"><i class="fas fa-phone"></i>(+62) 895-6002-25408</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="top-right">
                            <a href="<?= base_url() ?>#"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?= base_url() ?>#"><i class="fab fa-instagram"></i></a>
                            <a href="<?= base_url() ?>#"><i class="fab fa-spotify"></i></a>
                            <a href="<?= base_url() ?>#"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-7 d-xl-block d-lg-block d-flex align-items-center">
                                <div class="logo">
                                    <a href="<?= base_url() ?>#"><img src="<?= base_url() ?>assets/images/logo-head.png" alt="LOGO"></a>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-none d-block col-5">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>#benefit">Benefit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>#bidang">bidang keilmuan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>#webinar">Webinar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>#faq">FAQ</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>#contact">contact</a>
                                    </li> -->
                                </ul>
                                <a href="<?= base_url('auth') ?>#" class="my-btn ml-3">login</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->
    <!-- banner begin -->
    <div class="banner banner-3" id="home">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="banner-txt">
                        <h5>HMIF FT UNTAN PRESENT</h5>
                        <h1>webinar series</h1>
                        <p>Selamat datang, ini adalah aplikasi pendaftaran Webinar yang ada di Jurusan Informatika, Fakultas Teknik UNTAN.
                            <br>
                            Bagi peserta webinar, silahkan melakukan pendaftaran akun pada link dibawah ini. Jika sudah memiliki akun, silahkan klik tombol Masuk.
                        </p>
                        <div class="btn-box">
                            <a href="<?= base_url('auth') ?>#" class="my-btn">Daftar &nbsp;<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-img">
                        <img src="<?= base_url() ?>assets/images/banner-img.png" alt="banner image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <!-- process begin -->
    <div class="process process-2 process-3" id="benefit">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="heading heading-3">
                        <p>benefit</p>
                        <h2>Keuntungan yang Didapat</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="part-box after">
                        <div class="part-img">
                            <img src="<?= base_url() ?>assets/images/icons/diploma.png" alt="how it's">
                        </div>
                        <div class="part-txt">
                            <h3>e-Sertifikat</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="part-box after">
                        <div class="part-img">
                            <img src="<?= base_url() ?>assets/images/icons/idea.png" alt="how it's">
                        </div>
                        <div class="part-txt">
                            <h3>Ilmu Bermanfaat</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="part-box">
                        <div class="part-img">
                            <img src="<?= base_url() ?>assets/images/icons/trophy.png" alt="how it's">
                        </div>
                        <div class="part-txt">
                            <h3>Doorprize</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- process end -->
    <!-- service begin -->
    <div class="service service-3" id="bidang">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="heading heading-3">
                        <p>Bidang Keilmuan</p>
                        <h2>Topik yang sedang Trend</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <i class="flaticon-dashboard"></i>
                        </div>
                        <div class="part-txt">
                            <h3>data analytics</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <i class="flaticon-analysis"></i>
                        </div>
                        <div class="part-txt">
                            <h3>artificial Intelligence</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <i class="flaticon-management"></i>
                        </div>
                        <div class="part-txt">
                            <h3>UI/UX Designer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <i class="flaticon-analysis-1"></i>
                        </div>
                        <div class="part-txt">
                            <h3>Technopreneur</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <i class="flaticon-diagnostic"></i>
                        </div>
                        <div class="part-txt">
                            <h3>Keamanan Jaringan</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <i class="flaticon-analysis-2"></i>
                        </div>
                        <div class="part-txt">
                            <h3>machine learning</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->
    <!-- portfolio begin -->
    <div class="portfolio portfolio-3" id="webinar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="heading heading-3">
                        <p>Webinar</p>
                        <h2>Riwayat Webinar yang telah dilaksanakan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="items owl-carousel owl-theme">
                        <div class="item">
                            <div class="part-img">
                                <img src="<?= base_url() ?>assets/images/webinar/webinar2.png" alt="image-1">
                            </div>
                            <div class="part-txt">
                                <p>Data analytics</p>
                                <h3>Memulai Karir di Bidang Data Analytics</h3>
                            </div>
                            <div class="box-btn">
                                <a href="<?= base_url() ?>#" class="my-btn"><i class="far fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="part-img">
                                <img src="<?= base_url() ?>assets/images/webinar/webinar1.png" alt="image-1">
                            </div>
                            <div class="part-txt">
                                <p>artificial Intelligence</p>
                                <h3>Peran & Implementasi AI Pada Industri Teknologi</h3>
                            </div>
                            <div class="box-btn">
                                <a href="<?= base_url() ?>#" class="my-btn"><i class="far fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="part-img">
                                <img src="<?= base_url() ?>assets/images/webinar/webinar3.png" alt="image-1">
                            </div>
                            <div class="part-txt">
                                <p>UI/UX Design</p>
                                <h3>Mengenal lebih dekat profesi UI/UX Designer</h3>
                            </div>
                            <div class="box-btn">
                                <a href="<?= base_url() ?>#" class="my-btn"><i class="far fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="part-btn">
                <a href="<?= base_url() ?>#" class="my-btn">lihat semua webinar</a>
            </div>
        </div>
    </div>
    <!-- portfolio end -->
    <!-- counter begin -->
    <div class="counter counter-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="counter-txt">
                        <h2><span class="odometer" data-count="10">0</span></h2>
                        <p>webinar</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="counter-txt">
                        <h2><span class="odometer" data-count="600">0</span>+</h2>
                        <p>peserta</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="counter-txt">
                        <h2><span class="odometer" data-count="80">0</span>+</h2>
                        <p>Instansi</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="counter-txt">
                        <h2><span class="odometer" data-count="6">0</span></h2>
                        <p>bidang keilmuan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->
    <!-- faq begin -->
    <div class="faq faq-3" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="heading heading-3">
                        <p>faq</p>
                        <h2>frequently asked questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="part-txt">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3>Apakah webinar yang diadakan HMIF gratis?</h3>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Ya, webinar yang telah diadakan semuanya gratis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3>Bagaimana cara mendaftar webinar?</h3>
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Peserta hanya perlu mendaftar pada <a href="<?= base_url('auth') ?>">halaman ini</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3>Bagaimana peserta mendapatkan E-sertifikatnya?</h3>
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Peserta hanya peru login dengan akun yang telah didaftarkan, piih webinar yang diikuti, setelah itu mendownload pada tombol download yang tersedia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfour">
                                    <h3>Bagaimana peserta mendapatkan link Zoomnya?</h3>
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Peserta yang telah mendaftar akan dimasukkan ke grup Whatsapp, dan akan dibagikan link zoom beserta link virtual background melaui grup tersebut</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 d-xl-flex d-lg-flex d-md-flex d-block align-items-center">
                    <div class="part-img">
                        <img src="<?= base_url() ?>assets/images/faq-img.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq end -->
    <!-- subscribe begin -->
    <!-- <div class="subscribe subscribe-3">
        <div class="container">
            <div class="bg">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6">
                        <form>
                            <input type="text" placeholder="enter your name" required>
                            <input type="email" placeholder="enter your email" required>
                            <button class="my-btn">subscribe</button>
                        </form>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="part-txt">
                            <h2>subscribe to get latest news</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog blog-3">
    </div>
    <div class="contact contact-3" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="heading heading-3">
                        <p>contact</p>
                        <h2>get in touch with us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-img">
                        <img src="<?= base_url() ?>assets/images/contact.png" alt="img-1">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 d-xl-flex d-lg-flex d-block align-items-center">
                    <form>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <input type="text" name="name" placeholder="enter your first name" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <input type="text" name="name" placeholder="enter your last name" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <input type="email" id="email" placeholder="enter your email address" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <input type="text" placeholder="enter your subject" required>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <textarea placeholder="enter your message" required></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="part-btn text-center">
                                    <button class="my-btn">submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


    <!-- footer begin -->
    <div class="footer footer-3">
        <div class="copyright">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="part-txt">
                            <p>&copy; <?= date('Y'); ?> <a href="<?= base_url() ?>https://hmif-untan.tech/">HMIF FT UNTAN</a> All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5">
                        <div class="social">
                            <a href="<?= base_url() ?>#"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?= base_url() ?>#"><i class="fab fa-twitter"></i></a>
                            <a href="<?= base_url() ?>#"><i class="fab fa-instagram"></i></a>
                            <a href="<?= base_url() ?>#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
    <!-- jquery -->
    <script src="<?= base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
    <!-- jquery appear js -->
    <script src="<?= base_url() ?>assets/js/jquery.appear.min.js"></script>
    <!-- odometer -->
    <script src="<?= base_url() ?>assets/js/odometer.min.js"></script>
    <!-- owl carousel -->
    <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!-- slick slider -->
    <script src="<?= base_url() ?>assets/js/slick.min.js"></script>
    <!-- modal video / video popup -->
    <script src="<?= base_url() ?>assets/js/jquery-modal-video.min.js"></script>
    <!-- bootstrap -->
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- custom javascript -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>
</body>

</html>