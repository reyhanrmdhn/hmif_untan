<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1"><?= $title; ?></h4>
                    </div>
                </div>

            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">

                <form action="<?= base_url('admin/add_webinar') ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="card">
                        <div class="card-body mobile-form">
                            <div class="card-header mb-4 pl-0 mt-2 text-center" style="color: black; background-color:transparent; font-size:20px;">
                                <b>Form Tambah Webinar</b>
                            </div>
                            <div class="form-group row">
                                <label for="tema" class="col-md-2 col-form-label">Tema Webinar</label>
                                <div class="col-md-9">
                                    <input required type="text" class="form-control" id="tema" name="tema" placeholder="Masukkan Tema Webinar">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="subtema" class="col-md-2 col-form-label">Sub Tema Webinar</label>
                                <div class="col-md-9">
                                    <input required type="text" class="form-control" id="subtema" name="subtema" placeholder="Masukkan Sub Tema Webinar">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kategori" class="col-md-2 col-form-label">Kategori</label>
                                <div class="col-md-9">
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option value="data">Data Analytics</option>
                                        <option value="ai">Artificial Intelligence</option>
                                        <option value="ui-ux">UI/UX Design</option>
                                        <option value="technopreneur">Technopreneur</option>
                                        <option value="KIJ">Keamanan Jaringan</option>
                                        <option value="ML">Machine Learning</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="narsum" class="col-md-2 col-form-label">Narasumber</label>
                                <div class="col-md-9">
                                    <input required type="text" class="form-control" id="narsum" name="narsum" placeholder="Masukkan Narasumber">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal" class="col-md-2 col-form-label">Tanggal</label>
                                <div class="col-md-9">
                                    <input required type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-2 col-form-label">Poster</label>
                                <div class="col-md-9">
                                    <input required type="file" class="form-control" id="image" name="image" accept="image/png, image/jpeg">
                                </div>
                            </div>

                            <div class="card-footer bg-transparent text-center mt-5">
                                <button type="submit" class="btn btn-primary">Tambah Webinar</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- end page-content-wrapper -->
</div>
<!-- End Page-content -->