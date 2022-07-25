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
                <a href="#" data-toggle="modal" data-target="#addBarangModal" class="btn btn-info mb-3">Tambah Barang</a> &nbsp;
                <a href="#" class="btn btn-success mb-3"><i class="fas fa-file-excel"></i>&nbsp; Export to Excel (<i>Coming Soon</i>)</a>
                <table id="zero_config" class="table table-striped table-hover table-bordered text-center">
                    <thead class=" bg-info text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col" width="150px">Nama Barang</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Merk / Tipe</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($barang as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['nama_barang']; ?></td>
                                <td><?= $m['kode_barang']; ?></td>
                                <td><?= $m['merk']; ?> / <br> <?= $m['tipe']; ?></td>
                                <td><?= $m['tahun_pengadaan']; ?></td>
                                <td>
                                    <a href="#" class="badge badge-pill badge-info" data-toggle="modal" data-target="#infoBarangModal<?= $m['id'] ?>"><i class="mdi mdi-eye px-4"></i></a> <br>
                                    <a href="#" class="badge badge-pill badge-info edit-barang">Edit</a>
                                    <a href="#" class="badge badge-pill badge-danger">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Modal -->
    <div class="modal fade" id="addBarangModal" tabindex="-1" aria-labelledby="addBarangModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBarangModallLabel">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('kesrut/add_barang'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <!-- <div class="form-group">
                            <label for="sampul" class="col-form-label">Upload Sampul</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sampul" name="sampul" accept="image/png, image/jpeg">
                                    <label class="custom-file-label" for="sampul">Choose file</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama Barang</label>
                            <input required type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Barang">
                        </div>
                        <!-- <div class="form-group">
                            <label for="kode" class="col-form-label">Kode Barang</label>
                            <input required type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode Barang">
                        </div> -->
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="merk" class="col-form-label">Merk Barang</label>
                                <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan Merk Barang">
                            </div>
                            <div class="col-sm-6">
                                <label for="tipe" class="col-form-label">Tipe Barang</label>
                                <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Masukkan Tipe Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tahun" class="col-form-label">Tahun Pengadaan</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun Pengadaan">
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-form-label">Harga Pengadaan</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Pengadaan">
                        </div>
                        <div class="form-group">
                            <label for="kondisi" class="col-form-label">Kondisi Barang</label>
                            <select name="kondisi" id="kondisi" class="form-control" required>
                                <option value="">Pilih Kondisi</option>
                                <option value="Bagus">Bagus</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bidang" class="col-form-label">Bidang</label>
                            <select name="bidang" id="bidang" class="form-control" required>
                                <option value="">Pilih Bidang</option>
                                <option value="1">Himpunan</option>
                                <?php foreach ($bidang as $b) : ?>
                                    <option value="<?= $b['id'] ?>"><?= $b['singkatan']; ?></option>
                                <?php endforeach; ?>
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

    <?php foreach ($barang as $b) : ?>
        <div class="modal fade" id="infoBarangModal<?= $b['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="infoBarangModal" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="infoBarangModal">Info Laporan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5 class="box-title m-t-15">
                                                    <?= $b['nama_barang'] ?> &nbsp;
                                                    <span class="badge badge-info"><i class="fas fa-tag"></i>&nbsp; <?php if ($b['id_bidang'] == 1) {
                                                                                                                        echo 'Himpunan';
                                                                                                                    } else {
                                                                                                                        echo $b['singkatan'];
                                                                                                                    } ?></span>
                                                </h5>
                                                <table cellpadding="5">
                                                    <tr>
                                                        <td>Kode</td>
                                                        <td>:</td>
                                                        <td><?= $b['kode_barang']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Merk</td>
                                                        <td>:</td>
                                                        <td><?= $b['merk']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipe</td>
                                                        <td>:</td>
                                                        <td><?= $b['tipe']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tahun Pengadaan</td>
                                                        <td>:</td>
                                                        <td><?= $b['tahun_pengadaan']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga Pengadaan</td>
                                                        <td>:</td>
                                                        <td>
                                                            <?php
                                                            if ($b['harga_pengadaan'] == 0) { ?>
                                                                -
                                                            <?php } else { ?>
                                                                <b>Rp. </b><?= number_format($b['harga_pengadaan']); ?>
                                                            <?php }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kondisi</td>
                                                        <td>:</td>
                                                        <td><?= $b['kondisi']; ?></td>
                                                    </tr>
                                                </table>
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
        </div>
    <?php endforeach; ?>