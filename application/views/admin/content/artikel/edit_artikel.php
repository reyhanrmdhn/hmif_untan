<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <a href="#" class="btn btn-info mb-3" onclick="goBack()"><i class="mdi mdi-arrow-left"></i></a>
                <h4 class="page-title"><?= $title ?></h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-4">
                        <form action="<?= base_url('content/edit_artikel_cont') ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul Berita</label>
                                <div class="col-lg-10">
                                    <textarea name="judul" class="form-control" id="judul" rows="2" required><?= $edit['judul']; ?></textarea>
                                    <div class="invalid-feedback">
                                        Judul Masih Kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori Berita</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="kategori" id="kategori" required>
                                        <option value="">Pilih Kategori</option>
                                        <?php foreach ($kategori as $kat) :  ?>
                                            <option value="<?= $kat['id_kategori'] ?>" <?php if ($kat['id_kategori'] == $edit['id_kategori']) { ?> selected <?php } ?>><?= $kat['kategori'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Kategori Masih Kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="isi" class="col-sm-2 col-form-label">Isi Artikel</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control ckeditor" id="isi" name="isi" rows="20" required><?= $edit['isi']; ?></textarea>
                                    <div class="invalid-feedback">
                                        Isi Artikel Masih Kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label">Upload Sampul</label>
                                <div class="col-lg-5">
                                    <img src="<?= base_url('assets/images/artikel/' . $edit['gambar']) ?>" alt="" width="100%" height="auto">
                                </div>
                                <div class="col-lg-5"></div>
                                <div class="col-lg-2"></div>
                                <div class="input-group col-lg-5 mt-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/png, image/jpeg">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        Sampul Masih Kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12" style="text-align: right;">
                                    <input type="hidden" name="id" id="id" value="<?= $edit['id'] ?>">
                                    <button type="submit" class="btn btn-success mt-3">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->