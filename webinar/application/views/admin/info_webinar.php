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
                              <?= $this->session->flashdata('message'); ?>
                          </div>
                      </div>
                      <div class="row align-items-center">
                          <div class="col-md-8">
                              <button type="button" class="btn btn-info btn-rounded waves-effect waves-light mb-2" onclick="window.location.href='<?= base_url('admin/dashboard') ?>'"><i class="mdi mdi-keyboard-backspace"></i></button>
                              <h4 class="page-title mb-1"><?= $title ?>&nbsp;
                                  <p style="text-decoration:underline"><?= $webinar['tema']; ?></p>
                              </h4>
                          </div>
                      </div>

                  </div>
              </div>
              <!-- end page title end breadcrumb -->

              <div class="page-content-wrapper">
                  <div class="container-fluid">

                      <div class="row">
                          <div class="col-lg-8">
                              <div class="card">
                                  <div class="card-body">
                                      <h4 class="card-title" style="margin-bottom: 30px;">Data Webinar</h4>
                                      <table class="table table-hover table-striped table-hover">
                                          <tr>
                                              <td width="40%">Tema</td>
                                              <td width="60%"><b><?= $webinar['tema']; ?></b></td>
                                          </tr>
                                          <tr>
                                              <td>Sub Tema</td>
                                              <td><b><?= $webinar['sub_tema']; ?></b></td>
                                          </tr>
                                          <tr>
                                              <td>Narasumber</td>
                                              <td><b><?= $webinar['narasumber']; ?></b></td>
                                          </tr>
                                          <tr>
                                              <td>Tanggal Webinar</td>
                                              <td><b><?= date('d-m-Y', strtotime($webinar['tanggal'])) ?></b></td>
                                          </tr>
                                          <tr>
                                              <td>Peserta</td>
                                              <td><b><?= $peserta; ?></b></td>
                                          </tr>
                                      </table>
                                  </div>
                                  <div class="card-body bg-light">
                                      <div class="row text-center">
                                          <div class="col-6">
                                              <b>Status Webinar</b>
                                          </div>
                                          <div class="col-6">
                                              <?php
                                                if ($webinar['status'] == 0) { ?>
                                                  <h5><span class="badge badge-warning">Coming Soon</span></h5>
                                              <?php
                                                } else if ($webinar['status'] == 1) { ?>
                                                  <h5><span class="badge badge-info">Sedang Berlangsung</span></h5>
                                              <?php
                                                } else if ($webinar['status'] == 2) { ?>
                                                  <h5><span class="badge badge-success">Telah Selesai</span></h5>
                                              <?php
                                                }
                                                ?>
                                          </div>
                                          <div class="col-12" style="margin-top: 20px;">
                                              <button type="button" class="btn btn-info btn-lg btn-block waves-effect waves-light" onclick="window.location.href='<?= base_url('admin/peserta/' . $webinar['id']) ?>'">Lihat Peserta</button>
                                          </div>

                                      </div>
                                  </div>

                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="card">
                                  <div class="card-body">
                                      <h4 class="card-title" style="margin-bottom: 30px;">Ubah Status</h4>
                                      <form action="<?= base_url('admin/ubah_status_webinar') ?>" method="POST">
                                          <select name="status" id="status" class="form-control">
                                              <option value="0" <?php if ($webinar['status'] == "0") { ?> selected <?php } ?>>Coming Soon</option>
                                              <option value="1" <?php if ($webinar['status'] == "1") { ?> selected <?php } ?>>Sedang Berlangsung</option>
                                              <option value="2" <?php if ($webinar['status'] == "2") { ?> selected <?php } ?>>Telah Selesai</option>
                                          </select>
                                      </form>
                                  </div>
                              </div>

                              <div class="card">
                                  <div class="card-body">
                                      <h4 class="card-title" style="margin-bottom: 30px;">Poster</h4>
                                      <table class="table table-hover table-striped table-hover">
                                          <img src="<?= base_url('assets/images/webinar/' . $webinar['poster']) ?>" alt="" style="display:block;" width="100%" height="100%">
                                      </table>
                                  </div>
                              </div>

                          </div>
                      </div>


                  </div> <!-- container-fluid -->
              </div>
              <!-- end page-content-wrapper -->
          </div>
          <!-- End Page-content -->