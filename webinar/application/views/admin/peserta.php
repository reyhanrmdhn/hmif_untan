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
                            <div class="card-header" style="background-color: white;text-align:center">
                                <h3> <?= $webinar['tema']; ?></h3>
                                <h6 class="text-primary" style="font-size: 18px;"> <?= $webinar['sub_tema']; ?></h6>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Telp</th>
                                        <th>Absen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x = 1; ?>
                                    <?php foreach ($peserta as $l) :  ?>
                                        <tr>
                                            <th><?= $x; ?></th>
                                            <th><?= $l['name']; ?></th>
                                            <th><?= $l['email']; ?></th>
                                            <th><?= $l['telp']; ?></th>
                                            <th class="text-center">
                                                <?php
                                                if ($l['absen'] == 1) { ?>
                                                    <h5><span class="badge badge-success">Sudah Absen</span></h5>
                                                <?php
                                                } else { ?>
                                                    <h5><span class="badge badge-warning">Belum Absen</span></h5>

                                                <?php
                                                }
                                                ?>
                                                <!-- <form action="<?= base_url('admin/invite_peserta') ?>" method="POST">
                                                    <input type="hidden" name="email" id="email" value="<?= $l['email'] ?>">
                                                    <input type="hidden" name="id_webinar" id="id_webinar" value="<?= $webinar['id'] ?>">
                                                    <button type="submit" class="btn btn-success"> <i class="fab fa-whatsapp"></i>&nbsp; Invite</button>
                                                </form> -->
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