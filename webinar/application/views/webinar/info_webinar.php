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
                                  <?php
                                    if ($webinar['status'] == 0 || $webinar['status'] == 1) { ?>
                                      <div class="col-12 my-4">
                                          <button type="button" class="btn btn-success btn-lg btn-block waves-effect waves-light" onclick="window.location.href='<?= base_url('admin/peserta/' . $webinar['id']) ?>'">Daftar Webinar</button>
                                      </div>
                                  <?php
                                    }
                                    ?>

                              </div>
                          </div>
                          <div class="col-lg-4">

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

          <!--  Modal Info -->
          <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <h4>Timeline Catatan Petugas</h4>
                                  <ul class="timeline">
                                      <li>
                                          <a href="#">Laporan Sedang Ditinjau</a>
                                          <a href="#" class="float-right"><?= date('d M, Y', strtotime($laporan['tanggal_laporan'])); ?></a>
                                          <p>Peninjauan Laporan dan Pemilihan Petugas Penanganan Laporan Gangguan</p>
                                      </li>
                                  </ul>
                                  <?php foreach ($catatan as $c) : ?>
                                      <ul class="timeline">
                                          <li>
                                              <a href="#"><?= $c['catatan']; ?></a>
                                              <a href="#" class="float-right"><?= date('d M, Y', strtotime($c['date_created'])) ?></a>
                                              <p><?= $c['deskripsi']; ?></p>
                                          </li>
                                      </ul>
                                  <?php endforeach; ?>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                      </div>
                  </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

          <!--  Modal Info -->
          <div id="Batalkan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="<?= base_url('lapor/batalkan') ?>" method="POST">
                          <div class="modal-body">
                              <div class="row">
                                  <div class="col-md-12 text-center">
                                      <h3>Batalkan Laporan?</h3>
                                      <input type="hidden" name="id" id="id" value="<?= $laporan['laporan_id'] ?>">
                                      <button type="submit" class="btn btn-danger btn-lg waves-effect waves-light" style="width: 40%;">Batalkan</button>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                          </div>
                      </form>
                  </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

          <div id="modalPetugas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalPetugasLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div style="padding:25px">
                              <h4 class="card-title text-center">Petugas</h4>
                              <ul class="list-unstyled mt-4">
                                  <?php foreach ($petugas_modal as $p) : ?>
                                      <li class="media">
                                          <img class="mr-3 rounded-circle" src="<?= base_url('assets/img/profile/') ?><?= $p['image'] ?>" width="60" alt="Petugas">
                                          <div class="media-body">
                                              <h5 class="mt-2 mb-1"><?= $p['name']; ?></h5>
                                              <a href="mailto:<?= $p['email'] ?>"><?= $p['email']; ?></a>
                                          </div>
                                      </li>
                                      <hr>
                                  <?php endforeach; ?>
                              </ul>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                      </div>
                  </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->