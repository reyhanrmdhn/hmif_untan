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
                                      <h5 class="header-title mb-0">Data Laporan</h5>
                                  </div>
                                  <ul class="list-group list-group-flush">
                                      <li class="list-group-item">
                                          <div class="media my-2">

                                              <div class="media-body">
                                                  <p class="text-muted mb-2">Jumlah Webinar</p>
                                                  <h5 class="mb-0"><?= $total_webinar; ?></h5>
                                              </div>
                                              <div class="icons-lg ml-2 align-self-center">
                                                  <i class="uim uim-analytics"></i>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="media my-2">
                                              <div class="media-body">
                                                  <p class="text-muted mb-2">Sedang Berlangsung</p>
                                                  <h5 class="mb-0"><?= $berlangsung; ?></h5>
                                              </div>
                                              <div class="icons-lg ml-2 align-self-center">
                                                  <i class="uim uim-process"></i>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="media my-2">
                                              <div class="media-body">
                                                  <p class="text-muted mb-2">Selesai</p>
                                                  <h5 class="mb-0"><?= $selesai; ?></h5>
                                              </div>
                                              <div class="icons-lg ml-2 align-self-center">
                                                  <i class="uim uim-check"></i>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="media my-2">
                                              <div class="media-body">
                                                  <p class="text-muted mb-2">Total Peserta</p>
                                                  <h5 class="mb-0"><?= $peserta; ?></h5>
                                              </div>
                                              <div class="icons-lg ml-2 align-self-center">
                                                  <i class="uim uim-multiply"></i>
                                              </div>
                                          </div>
                                      </li>
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
                                                      <th scope="col">Peserta</th>
                                                      <th scope="col">Status</th>
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
                                                          <td>
                                                              <?php
                                                                $this->db->select('*');
                                                                $this->db->from('peserta');
                                                                $this->db->where('id_webinar', $l['id']);
                                                                $peserta = $this->db->get()->num_rows();
                                                                ?>
                                                              <?= $peserta; ?>
                                                          </td>
                                                          <td>
                                                              <?php if ($l['status'] == 0) { ?>
                                                                  <div class="badge badge-soft-warning">Coming Soon</div>
                                                              <?php
                                                                } else if ($l['status'] == 1) { ?>
                                                                  <div class="badge badge-soft-primary">Sedang Berlangsung</div>
                                                              <?php
                                                                } else if ($l['status'] == 2) { ?>
                                                                  <div class="badge badge-soft-warning">Telah Selesai</div>
                                                              <?php } ?>
                                                          </td>
                                                          <td>
                                                              <div class="btn-group" role="group">
                                                                  <button type="button" onclick="window.location.href='<?= base_url('admin/info_webinar/' . $l['id']) ?>'" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat">
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