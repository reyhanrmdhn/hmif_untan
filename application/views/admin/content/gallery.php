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
            <div class="col-lg-12 mt-3">
                <a href="#" data-toggle="modal" data-target="#newGalleryModal" class="btn btn-info mb-3">Tambah Gallery</a>
            </div>
        </div>
        <div class="row el-element-overlay mt-3">
            <?php foreach ($gallery as $g) : ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="<?= base_url('assets/images/gallery/' . $g['thumbnail']) ?>" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" target="_blank" href="<?= base_url('assets/images/gallery/' . $g['gambar']) ?>"><i class="sl-icon-magnifier"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link" target="_blank" href="<?= $g['link'] ?>"><i class="sl-icon-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0"><?= $g['judul']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newGalleryModal" tabindex="-1" aria-labelledby="newGalleryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newGalleryModallLabel">Tambah Gallery Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('content/add_gallery'); ?>" method="POST" enctype="multipart/form-data">
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
                            <label for="gambar_galeri" class="col-form-label">Upload Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar_galeri" name="gambar_galeri" accept="image/png, image/jpeg">
                                    <label class="custom-file-label" for="gambar_galeri">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="judul" class="col-form-label">Judul Gallery</label>
                            <input required type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-form-label">Link</label>
                            <input required type="url" class="form-control" id="link" name="link" placeholder="Masukkan Link">
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