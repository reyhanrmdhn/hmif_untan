<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <h4 class="page-title">
                    <?= $title ?>
                    <span style="float:right"><a href="<?= base_url('admin/menu_active') ?>" class="btn btn-primary">Show Menu Management</a></span>
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
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#info" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-account-multiple"></i></span> <span class="hidden-xs-down">info Divisi</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#kepengurusan" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-account-settings-variant"></i></span> <span class="hidden-xs-down">Info Kepengurusan</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane p-20 active" id="info" role="tabpanel">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <!-- Nav tabs -->
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <?php foreach ($divisi as $p) :  ?>
                                                <a class="nav-link <?php if ($p['link'] == 'ph') { ?> active <?php } ?>" id="v-pills-<?= $p['link'] ?>-tab" data-toggle="pill" href="#v-pills-<?= $p['link'] ?>" role="tab" aria-controls="v-pills-<?= $p['link'] ?>" <?php if ($p['link'] == 'ph') { ?> aria-selected="true" <?php } else { ?> aria-selected="false" <?php } ?>><?= $p['singkatan']; ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 pt-3 px-4">
                                        <div class=" tab-content" id="v-pills-tabContent">
                                            <?php foreach ($divisi as $d) :  ?>
                                                <div class="tab-pane fade <?php if ($d['link'] == 'ph') { ?> show active <?php } ?>" id="v-pills-<?= $d['link'] ?>" role="tabpanel" aria-labelledby="v-pills-<?= $d['link'] ?>-tab">
                                                    <div class="text-center">
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#editDivisiModal<?= $d['id'] ?>" class="badge badge-info mb-3" style="margin-left: 150px;color:white;font-size:12px;"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</a>
                                                        <br>
                                                        <img src="<?= base_url('assets/images/divisi/' . $d['icon']) ?>" alt="" class="img-responsive" width="70px" height="auto">
                                                        <h3 class="mt-2">
                                                            <?= $d['nama_divisi']; ?>
                                                        </h3>
                                                        <p class="mt-2 px-5">
                                                            <?= $d['detail']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <div class="tab-pane p-20" id="kepengurusan" role="tabpanel">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <!-- Nav tabs -->
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <?php foreach ($divisi as $div) :  ?>
                                                <a class="nav-link <?php if ($div['link'] == 'ph') { ?> active <?php } ?>" id="v-pills-<?= $div['link'] ?>-tab" data-toggle="pill" href="#v-pills-<?= $div['link'] ?>-pengurus" role="tab" aria-controls="v-pills-<?= $div['link'] ?>" <?php if ($div['link'] == 'ph') { ?> aria-selected="true" <?php } else { ?> aria-selected="false" <?php } ?>><?= $div['singkatan']; ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 pt-3 px-4">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <?php foreach ($divisi as $d) :  ?>
                                                <div class="tab-pane fade <?php if ($d['link'] == 'ph') { ?> show active <?php } ?>" id="v-pills-<?= $d['link'] ?>-pengurus" role="tabpanel" aria-labelledby="v-pills-<?= $d['link'] ?>-tab">
                                                    <a href="javascript:void(0)" class="btn btn-info mb-3" data-toggle="modal" data-target="#addPengurusModal<?= $d['id'] ?>">Tambah Data Pengurus</a>
                                                    <table id="divisi4" class="table table-striped table-hover table-bordered text-center">
                                                        <thead class=" bg-info text-white">
                                                            <tr>
                                                                <th scope="col">No</th>
                                                                <th scope="col">Nama</th>
                                                                <th scope="col">Jabatan</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1; ?>
                                                            <?php $var = $this->db->get_where('kepengurusan', ['id_divisi' => $d['id']])->result_array(); ?>
                                                            <?php foreach ($var as $m) : ?>
                                                                <tr>
                                                                    <th scope="row"><?= $i; ?></th>
                                                                    <td><?= $m['nama']; ?></td>
                                                                    <td><?= $m['jabatan']; ?></td>
                                                                    <td>
                                                                        <a href="javascript:void(0)" class="badge badge-pill badge-info" data-toggle="modal" data-target="#viewPHModal<?= $m['id'] ?>"><i class="mdi mdi-eye px-1"></i></a>
                                                                        <a href="javascript:void(0)" class="badge badge-pill badge-warning text-white edit-pengurus" data-id="<?= $m['id'] ?>" data-nama="<?= $m['nama'] ?>" data-jabatan="<?= $m['jabatan'] ?>" data-divisi="<?= $m['id_divisi'] ?>">Edit</a>
                                                                        <a href="<?= base_url('setting/delete/' . $m['id']) ?>" class="badge badge-pill badge-danger" onclick="return confirm('Hapus Data?');">Delete</a>
                                                                    </td>
                                                                </tr>
                                                                <?php $i++; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php foreach ($pengurus as $p) :  ?>
    <div class="modal fade" id="viewPHModal<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="viewPHModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="viewPHModal">Info</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="white-box"><img src="<?= base_url('assets/images/team/' . $p['image']) ?>" width="150px" height="auto"></div>
                                </div>
                                <div class="col-lg-8">
                                    <h3 class="box-title m-t-15"><?= $p['nama'] ?></h3>
                                    <h4>
                                        <?= $p['jabatan']; ?>
                                    </h4>
                                    <h4>
                                        <a href=""><span class="label" style="background-color: #4267B2;"><i class="fab fa-facebook-f text-white"></i></span></a>
                                        <a href=""><span class="label" style="background-color: #00acee;"><i class="fab fa-twitter text-white"></i></span></a>
                                        <a href=""><span class="label" style="background-color: #0e76a8;"><i class=" fab fa-linkedin-in text-white"></i></span></a>
                                        <a href=""><span class="label" style="background:linear-gradient(-135deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);"><i class="fab fa-instagram text-white"></i></span></a>
                                    </h4>
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

<?php foreach ($divisi as $d) : ?>
    <div class="modal fade" id="addPengurusModal<?= $d['id'] ?>" tabindex="-1" aria-labelledby="addPengurusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPengurusModallLabel">Tambah Pengurus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('setting/tambah_pengurus'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="foto" class="col-form-label">Foto Pengurus</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/png, image/jpeg">
                                    <label class="custom-file-label" for="foto">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama Pengurus</label>
                            <input required type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="divisi" class="col-form-label">Divisi</label>
                            <select name="divisi" id="divisi" class="form-control">
                                <option value="<?= $d['id'] ?>"><?= $d['nama_divisi']; ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-form-label">Jabatan</label>
                            <input required type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan">
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

    <div class="modal fade" id="editDivisiModal<?= $d['id'] ?>" tabindex="-1" aria-labelledby="editDivisiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDivisiModallLabel">Edit Divisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('setting/edit_divisi'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="icon" class="col-form-label">Icon Divisi</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="icon" name="icon" accept="image/png, image/jpeg, image/svg">
                                    <label class="custom-file-label" for="icon">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama Divisi</label>
                            <input required type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Divisi" value="<?= $d['nama_divisi'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="detail" class="col-form-label">Detail</label>
                            <textarea name="detail" id="detail" class="form-control" rows="6" required><?= $d['detail']; ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id" value="<?= $d['id'] ?>">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<div class="modal fade" id="editPengurusModal" tabindex="-1" aria-labelledby="editPengurusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPengurusModallLabel">Edit Pengurus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('setting/edit_pengurus'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="foto" class="col-form-label">Foto Pengurus</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/png, image/jpeg">
                                <label class="custom-file-label" for="foto">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama Pengurus</label>
                        <input required type="text" class="form-control nama" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="divisi_edit" class="col-form-label">Divisi</label>
                        <select name="divisi_edit" id="divisi_edit" class="form-control">
                            <option value="">Pilih Divisi</option>
                            <?php foreach ($divisi as $d) :  ?>
                                <option value="<?= $d['id'] ?>"><?= $d['nama_divisi']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input required type="text" class="form-control jabatan" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="divisi" id="divisi" class="divisi">
                    <input type="hidden" name="id" id="id" class="id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>