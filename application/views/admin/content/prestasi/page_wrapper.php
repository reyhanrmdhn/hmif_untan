<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <h4 class="page-title">
                    <?= $title ?>
                </h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <?= $this->session->flashdata('message'); ?>
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs customtab mt-2" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#prestasi" role="tab"><span class="hidden-sm-up"><i class="fas fa-trophy"></i></span> <span class="hidden-xs-down">Prestasi</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#kategori" role="tab"><span class="hidden-sm-up"><i class="fas fa-tag"></i></span> <span class="hidden-xs-down">Kategori</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tingkat" role="tab"><span class="hidden-sm-up"><i class="fas fa-rocket"></i></span> <span class="hidden-xs-down">Tingkat</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active p-2 mt-4" id="prestasi" role="tabpanel">
                        <?php include('prestasi.php') ?>
                    </div>
                    <div class="tab-pane p-2 mt-4" id="kategori" role="tabpanel">
                        <?php include('kategori.php') ?>
                    </div>
                    <div class="tab-pane p-2 mt-4" id="tingkat" role="tabpanel">
                        <?php include('tingkat.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newPrestasiModal" tabindex="-1" aria-labelledby="newPrestasiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPrestasiModallLabel">Tambah Prestasi Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('content/add_prestasi'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="sampul" class="col-form-label">Upload Sampul</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="sampul" name="sampul" accept="image/png, image/jpeg">
                                <label class="custom-file-label" for="sampul">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lomba" class="col-form-label">Lomba</label>
                        <input required type="text" class="form-control" id="lomba" name="lomba" placeholder="Masukkan Lomba">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="col-form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="mahasiswa" class="col-form-label">Tim / Mahasiswa</label>
                        <input required type="text" class="form-control" id="mahasiswa" name="mahasiswa" placeholder="Masukkan Tim / Mahasiswa">
                    </div>
                    <div class="form-group">
                        <label for="prestasi" class="col-form-label">Prestasi</label>
                        <input required type="text" class="form-control" id="prestasi" name="prestasi" placeholder="Masukkan Prestasi">
                    </div>
                    <div class="form-group">
                        <label for="kategori" class="col-form-label">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control" required>
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $k) :  ?>
                                <option value="<?= $k['id_kategori'] ?>"><?= $k['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tingkat" class="col-form-label">Tingkat</label>
                        <select name="tingkat" id="tingkat" class="form-control" required>
                            <option value="">Pilih Tingkatan</option>
                            <?php foreach ($tingkat as $k) :  ?>
                                <option value="<?= $k['id_tingkat'] ?>"><?= $k['tingkat']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun" class="col-form-label">Tahun</label>
                        <select name="tahun" id="tahun" class="form-control" required>
                            <option value="">Pilih Tahun</option>
                            <?php
                            for ($i = 2020; $i <= 2025; $i++) { ?>
                                <option value="<?= $i ?>" <?php if ($i == date('Y')) { ?>selected <?php } ?>><?= $i; ?></option>
                            <?php  }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($prestasi as $p) :  ?>
    <div class="modal fade" id="infoPrestasiModal<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="infoPrestasiModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="infoPrestasiModal">Info Laporan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <div class="white-box text-center"><img src="<?= base_url('') ?>assets/images/prestasi/<?= $p['sampul'] ?>" width="150px" height="auto"></div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-6">
                                            <h3 class="box-title m-t-15"><?= $p['lomba'] ?> &nbsp;
                                                <span class="label label-info"><i class="fas fa-calendar"></i>&nbsp; <?= $p['tahun']; ?></span>
                                            </h3>
                                            <h4>
                                                <?= $p['mahasiswa']; ?>
                                                <span class="label label-warning"><i class="fas fa-trophy"></i>&nbsp;<?= $p['prestasi']; ?></span>
                                            </h4>
                                            <p style="font-size:15px"><?= $p['deskripsi']; ?></p>
                                            <h4>
                                                <span class="label label-primary"><i class="fas fa-rocket"></i>&nbsp;<?= $p['tingkat']; ?></span>&nbsp;
                                                <span class="label label-success"><i class="fas fa-tag"></i>&nbsp;<?= $p['kategori']; ?></span>&nbsp;
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>