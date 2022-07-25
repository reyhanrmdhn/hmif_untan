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
                              <button type="button" class="btn btn-info btn-rounded waves-effect waves-light mb-2" onclick="javascript:window.history.back();"><i class="mdi mdi-keyboard-backspace"></i></button>
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
                                      </table>
                                  </div>
                                  <div class="card-body bg-light">
                                      <div class="row text-center">
                                          <div class="col-6">
                                              <h5>Status Webinar</h5>
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
                                      </div>
                                  </div>
                              </div>
                              <div class="card bg-primary text-white">
                                  <div class="card-body">
                                      <div class="row text-center">
                                          <div class="col-6">
                                              <h5 class="text-white">Presensi</h5>
                                          </div>
                                          <div class="col-6">
                                              <?php
                                                if ($webinar['absen'] == 0) { ?>
                                                  <h5><span class="badge badge-warning">Belum Tersedia</span></h5>
                                              <?php
                                                } else if ($webinar['absen'] == 1) { ?>
                                                  <h5><span class="badge badge-success">Sudah Absen</span></h5>
                                              <?php
                                                } else if ($webinar['absen'] == 2) { ?>
                                                  <h5><span class="badge badge-danger">Tidak Absen</span></h5>
                                              <?php
                                                }
                                                ?>
                                          </div>
                                      </div>
                                  </div>

                              </div>

                          </div>
                          <div class="col-lg-4">
                              <div class="card">
                                  <div class="card-body">
                                      <h4 class="card-title text-center" style="margin-bottom: 30px;">Sertifikat</h4>
                                      <?php $h_koma = str_replace(',', '%2C', $user['name']) ?>
                                      <?php $h_titik = str_replace('.', '%2E', $h_koma) ?>
                                      <?php $url_fix = str_replace(' ', '_', $h_titik) ?>
                                      <a href="<?= base_url('user/download_sertifikat/' . $url_fix . '/' . $webinar['id']) ?>" class="btn btn-success btn-lg btn-block waves-effect waves-light text-white"><i class="fas fa-download"></i>&nbsp;Download Sertifikat</a>
                                      <!-- <?php
                                            if ($presensi == 0) { ?>
                                          <button type="button" class="btn btn-danger btn-lg btn-block waves-effect waves-light disabled">Gagal Mendapat Sertifikat</button>
                                      <?php
                                            } else if ($presensi >= 1) { ?>
                                          <?php
                                                if ($sertifikat['sertifikat'] == "") { ?>
                                              <button type="button" class="btn btn-warning btn-lg btn-block waves-effect waves-light disabled">Sedang Diproses</button>
                                          <?php
                                                } else { ?>
                                          <?php
                                                }
                                            ?>
                                      <?php
                                            }
                                        ?> -->

                                  </div>
                              </div>

                              <div class="card">
                                  <div class="card-body">
                                      <h4 class="card-title text-center" style="margin-bottom: 30px;">Poster</h4>
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