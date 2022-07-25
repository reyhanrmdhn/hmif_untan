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
                              <h4 class="page-title mb-1"><?= $title ?></h4>
                          </div>
                      </div>

                  </div>
              </div>
              <!-- end page title end breadcrumb -->

              <div class="page-content-wrapper">
                  <div class="container-fluid">

                      <div class="row">
                          <div class="col-lg-3">
                              <div class="card">
                                  <div class="card-header bg-transparent p-3">
                                      <h5 class="header-title mb-0">History</h5>
                                  </div>
                                  <ul class="list-group list-group-flush">
                                      <li class="list-group-item">
                                          <div class="media my-2">

                                              <div class="media-body">
                                                  <p class="text-muted mb-2">Webinar Diikuti</p>
                                                  <h5 class="mb-0"><?= $webinar_num; ?></h5>
                                              </div>
                                              <div class="icons-lg ml-2 align-self-center text-primary">
                                                  <i class="mdi mdi-calendar-import" style="font-size:30px;"></i>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="media my-2">
                                              <div class="media-body">
                                                  <p class="text-muted mb-2">Webinar Selesai</p>
                                                  <h5 class="mb-0"><?= $webinar_num_selesai; ?></h5>
                                              </div>
                                              <div class="icons-lg ml-2 align-self-center text-primary">
                                                  <i class="mdi mdi-calendar-check" style="font-size:30px;"></i>
                                              </div>
                                          </div>
                                      </li>
                                      <!-- <li class="list-group-item">
                                          <div class="media my-2">
                                              <div class="media-body">
                                                  <p class="text-muted mb-2">Sertifikat</p>
                                                  <h5 class="mb-0"><?= $webinar_num_sertifikat; ?></h5>
                                              </div>
                                              <div class="icons-lg ml-2 align-self-center">
                                                  <i class="uim uim-check"></i>
                                              </div>
                                          </div>
                                      </li> -->
                                      <!-- <li class="list-group-item">
                                          <div class="media my-2">
                                              <div class="media-body">
                                                  <p class="text-muted mb-2">Total Peserta</p>
                                                  <h5 class="mb-0"><?= $peserta; ?></h5>
                                              </div>
                                              <div class="icons-lg ml-2 align-self-center">
                                                  <i class="uim uim-multiply"></i>
                                              </div>
                                          </div>
                                      </li> -->
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-9">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="float-right ml-2">
                                          <a href="<?= base_url('lapor/table') ?>">View all</a>
                                      </div>
                                      <h5 class="header-title mb-4">Data Webinar</h5>

                                      <div class="table-responsive">
                                          <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                              <thead style="text-align: left;">
                                                  <tr>
                                                      <th scope="col">No</th>
                                                      <th scope="col">Webinar</th>
                                                      <th scope="col">Tanggal</th>
                                                      <th scope="col">Status Webinar</th>
                                                      <th scope="col">Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody style="text-align: left;">
                                                  <?php $x = 1; ?>
                                                  <?php foreach ($webinar as $l) : ?>
                                                      <tr>
                                                          <th scope="row">
                                                              <?= $x; ?>
                                                          </th>
                                                          <td><?= $l['sub_tema']; ?></td>
                                                          <td><?= $l['tanggal']; ?></td>
                                                          <td class="text-white">
                                                              <?php if ($l['status'] == 0) { ?>
                                                                  <h5><span class="badge badge-soft-warning">Coming Soon</span></h5>
                                                              <?php
                                                                } else if ($l['status'] == 1) { ?>
                                                                  <h5><span class="badge badge-soft-primary">Sedang Berlangsung</span></h5>
                                                              <?php
                                                                } else if ($l['status'] == 2) { ?>
                                                                  <h5><span class="badge badge-soft-success">Telah Selesai</span></h5>
                                                              <?php } ?>
                                                          </td>
                                                          <td>
                                                              <div class="btn-group" role="group">
                                                                  <button type="button" onclick="window.location.href='<?= base_url('user/webinar/' . $l['id']) ?>'" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat">
                                                                      <i class="mdi mdi-eye"></i>
                                                                  </button>
                                                              </div>
                                                          </td>
                                                      </tr>
                                                      <?php $x++; ?>
                                                  <?php endforeach; ?>

                                              </tbody>
                                          </table>
                                      </div>

                                      <!-- <div class="mt-4">
                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <i class="mdi mdi-chevron-left"></i>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <i class="mdi mdi-chevron-right"></i>
                            </a>
                          </li>
                        </ul>
                      </div> -->
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- end row -->

                  </div> <!-- container-fluid -->
              </div>
              <!-- end page-content-wrapper -->
          </div>
          <!-- End Page-content -->