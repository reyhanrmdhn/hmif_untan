<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title"><?= $title ?></h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <?= $this->session->flashdata('message'); ?>
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <span class="btn btn-circle btn-lg bg-primary">
                                <i class="fas fa-cubes text-white"></i>
                            </span>
                        </div>
                        <div>
                            Total Barang
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light"><?= $barang; ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <span class="btn btn-circle btn-lg" style="background-color: #33cc33;">
                                <i class="fas fa-check text-white"></i>
                            </span>
                        </div>
                        <div>
                            Kondisi Bagus
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light"><?= $bagus; ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <span class="btn btn-circle btn-lg" style="background-color: #e6e600;">
                                <i class="fas fa-exclamation text-white"></i>
                            </span>
                        </div>
                        <div>
                            Kondisi Sedang
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light"><?= $sedang; ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <span class="btn btn-circle btn-lg" style="background-color: red;">
                                <i class="fas fa-times text-white"></i>
                            </span>
                        </div>
                        <div>
                            Kondisi Rusak
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light"><?= $rusak; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Grafik Inventaris Tiap Bidang HMIF Tahun <?= date('Y'); ?></h4>
                        <div id="morris-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>