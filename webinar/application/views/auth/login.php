<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin | Webinar HMIF</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/') ?>images/logo2.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>vendor/login/bootstrap/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>vendor/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>vendor/login/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>vendor/login/css-hamburgers/hamburgers.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>vendor/login/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>vendor/login/util.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>vendor/login/main.css" />
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url() ?>assets/images/bg-login2.png" alt="IMG" />
                </div>

                <form class="login100-form validate-form" method="POST" action="<?= base_url('auth'); ?>">
                    <span class="login100-form-title">Login </span>
                    <?= $this->session->flashdata('message'); ?>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" id="email" placeholder="Email" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">Login</button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1"> Forgot </span>
                        <a class="txt2" href="#"> Username / Password? </a>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="javascript:void(0)" data-toggle="modal" data-target="#regisModal">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>

                    <!-- <div class="text-center p-t-12">
                        <span class="txt1"> Forgot </span>
                        <a class="txt2" href="#"> Username / Password? </a>
                    </div> -->

                    <div class="text-center p-t-12">
                        <a href="https://hmif-untan.tech/webinar"><img src="<?= base_url('assets/') ?>images/logo2.png" class="kominfo"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Modal Personal-->
    <div class="modal fade" id="regisModal" tabindex="-1" aria-labelledby="regisModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="regisModalLabel">Registrasi Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('auth/regis'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label ml-3">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control title" id="name" name="name" placeholder="Masukkan Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label ml-3">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control title" id="email" name="email" placeholder="Masukkan Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="instansi" class="col-sm-3 col-form-label ml-3">Instansi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control title" id="instansi" name="instansi" placeholder="Masukkan Instansi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telp" class="col-sm-3 col-form-label ml-3">No Telp</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control title" id="telp" name="telp" placeholder="Masukkan No Telp" required maxlength="15">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label ml-3">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control title" id="password1" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-sm-3 col-form-label ml-3">Repeat</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control title" id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                        <span style="margin-left:15px;" id='message'></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>vendor/login/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>vendor/login/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('') ?>vendor/login/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>vendor/login/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>vendor/login/tilt/tilt.jquery.min.js"></script>
    <script>
        $(".js-tilt").tilt({
            scale: 1.1,
        });

        $('#password1, #password2').on('keyup', function() {
            if ($('#password1').val() == '') {
                $('#message').html('Password is Empty').css('color', 'red');
            } else if ($('#password1').val() == $('#password2').val()) {
                $('#message').html('Password Matching').css('color', 'green');
            } else
                $('#message').html('Password Not Matching').css('color', 'red');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.alert').delay(1000).hide("slow");
        });
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>vendor/login/main.js"></script>
</body>

</html>