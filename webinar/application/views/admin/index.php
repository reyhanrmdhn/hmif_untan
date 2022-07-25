      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">

        <div class="page-content">

          <!-- Page-Title -->
          <div class="page-title-box">
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h4 class="page-title mb-1"><?= $title; ?></h4>
                </div>
              </div>

            </div>
          </div>
          <!-- end page title end breadcrumb -->

          <div class="page-content-wrapper">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12 mb-2">
                          <div class="mb-2">
                            <img class="rounded-circle" alt="200x200" src="<?= base_url('assets/images/profile/') ?><?= $user['image'] ?>" data-holder-rendered="true" height="100">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <h4 class="header-title"><?= $user['name']; ?></h4>
                          <p class="mb-0"><?= $user['email']; ?></p>
                          <p class="card-title-desc badge badge-info text-white mb-3"><?= $user['instansi']; ?></p><br>
                          <?php if ($user['role_id'] == 2) { ?>
                            <p class="card-title-desc badge badge-light">Peserta</p>
                          <?php
                          } else if ($user['role_id'] == 1) { ?>
                            <p class="card-title-desc badge badge-primary" style="color: white;">Admin</p>
                          <?php
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-9">
                  <div class="card">
                    <div class="card-header" style="background-color: white;border-bottom:1px solid #d4d4d4">
                      <h5 class="mt-2">Edit Profil</h5>
                    </div>
                    <div class="card-body">
                      <?= $this->session->flashdata('message'); ?>
                      <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Edit Profil</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Change Password</a>
                          </li>
                        </ul>
                      </div>
                      <div class="tab-content mt-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                          <div class="pl-lg-4">
                            <form <?php if ($this->session->userdata('id') == 1) { ?> action="<?= base_url('admin/edit') ?>" <?php } else { ?> action="<?= base_url('user/edit') ?>" <?php } ?> method="POST" enctype="multipart/form-data">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="name">Nama</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Nama" value="<?= $user['name']; ?>" required>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?= $user['email'] ?>" readonly>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <label class="form-control-label" for="image">Change Picture</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="image" name="image" accept="image/png, image/jpeg">
                                      <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12 mt-4" style="text-align: right;">
                                  <input type="hidden" name="id" id="id" value="<?= $user['id']; ?>">
                                  <input type="hidden" name="oldpic" id="oldpic" value="<?= $user['image']; ?>">
                                  <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                              </div>

                            </form>
                          </div>

                        </div>

                        <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                          <form <?php if ($this->session->userdata('id') == 1) { ?> action="<?= base_url('admin/changePassword') ?>" <?php } else { ?> action="<?= base_url('user/changePassword') ?>" <?php } ?> method="POST">
                            <div class="pl-lg-4">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="form-control-label" for="current_password">Old Password</label>
                                    <input required id="current_password" name="current_password" class="form-control" placeholder="Old Password" type="password">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="new_password">New Password</label>
                                    <input required type="password" id="new_password" name="new_password" class="form-control" placeholder="New Password">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="new_password2">Repeat New Password</label>
                                    <input required type="password" id="new_password2" name="new_password2" class="form-control" placeholder="Repeat New Password">
                                  </div>
                                </div>
                                <div class="col-lg-12" style="text-align: right;">
                                  <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>

                              </div>
                            </div>

                          </form>
                        </div>
                      </div>
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