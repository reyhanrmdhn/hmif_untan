    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <button type="button" class="btn btn-info btn-rounded waves-effect waves-light mb-2" onclick="javascript:window.history.back();"><i class="mdi mdi-keyboard-backspace"></i></button>
                            <h4 class="page-title mb-1"><?= $title ?></h4>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <a href="#" class="btn btn-success mb-3 btn-import" data-user_id="<?= $this->session->userdata('id') ?>"><i class="fas fa-file-excel"></i>&nbsp; Import Data Peserta</a>
                            <a href="#" class="btn btn-success mb-3 ml-2 btn-import2" data-user_id="<?= $this->session->userdata('id') ?>"><i class="fas fa-file-excel"></i>&nbsp; Import Data Absen</a>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x = 1; ?>
                                    <?php foreach ($peserta as $l) :  ?>
                                        <tr>
                                            <th><?= $x; ?></th>
                                            <th><?= $l['name']; ?></th>
                                            <th><?= $l['email']; ?></th>
                                            <th style="text-align: center;">
                                                <div class="btn-group" role="group">
                                                    <button type="button" onclick="window.location.href='<?= base_url('user/webinar/' . $l['id']) ?>'" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                </div>

                                            </th>
                                        </tr>
                                        <?php $x++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->


    <!-- Tambah Modal -->
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Import Data Excel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/import_data') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-2 mt-2">
                                <h5>Import</h5>
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file" name="file" accept="application/vnd.ms-excel">
                                            <label class="custom-file-label" for="file">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="user_id" id="user_id" class="user_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="importModal2" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Import Data Excel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/import_data2') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-2 mt-2">
                                <h5>Import</h5>
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file" name="file" accept="application/vnd.ms-excel">
                                            <label class="custom-file-label" for="file">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="user_id" id="user_id" class="user_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>