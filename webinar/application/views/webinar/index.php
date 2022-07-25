<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <!-- <h4 class="page-title mb-1"><?= $title; ?></h4> -->
                    </div>
                </div>

            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center py-2"><?= $title; ?></h2>
                                <div class="row">
                                    <ul class="col list-inline gallery-categories-filter text-center" id="filter">
                                        <li class="list-inline-item"><a class="categories active" data-filter="*">All</a></li>
                                        <li class="list-inline-item"><a class="categories" data-filter=".data">Data Analytics</a></li>
                                        <li class="list-inline-item"><a class="categories" data-filter=".ai">AI</a></li>
                                        <li class="list-inline-item"><a class="categories" data-filter=".ui-ux">UI/UX</a></li>
                                        <li class="list-inline-item"><a class="categories" data-filter=".technopreneur">Technopreneur</a></li>
                                        <li class="list-inline-item"><a class="categories" data-filter=".KIJ">Keamanan Jaringan</a></li>
                                        <li class="list-inline-item"><a class="categories" data-filter=".ML">Machine Learning</a></li>
                                    </ul>
                                </div>

                                <!-- Gallary -->
                                <div class="row container-grid projects-wrapper">
                                    <?php foreach ($webinar as $web) : ?>
                                        <div class="col-lg-4 <?= $web['data_filter'] ?>">
                                            <div class="card card-body text-center">
                                                <div class="gallery-box mt-4">
                                                    <a class="gallery-popup" href="<?= base_url('assets/images/webinar/' . $web['poster']) ?>" title="">
                                                        <img class="gallery-demo-img img-fluid mx-auto" src="<?= base_url() ?>assets/images/webinar/<?= $web['poster'] ?>" alt="1" />
                                                        <div class="gallery-overlay">
                                                            <div class="overlay-content">
                                                                <h5 class="overlay-title"><?= $web['sub_tema']; ?></h5>
                                                                <p class="text-uppercase mb-0 text-white badge badge-success"><?= $web['kategori']; ?></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a href="<?= base_url('user/webinar/' . $web['id']) ?>" class="btn btn-success waves-effect waves-light mt-3">Lihat Webinar</a>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->