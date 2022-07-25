<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ISC | Login</title>

    <link rel="icon" href="<?= base_url() ?>assets/images/logo.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/fontawesome-all.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/iofrm-style.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/iofrm-theme10.css">

</head>



<body>

    <div class="form-body">

        <div class="row">

            <div class="form-holder">

                <div class="form-content">

                    <div class="form-items">

                        <div class="website-logo-inside">

                            <a href="<?= base_url() ?>">

                                <div class="logo">

                                    <img class="logo-size" src="<?= base_url() ?>assets/images/logo-isc.png" alt="">

                                </div>

                            </a>

                        </div>

                        <h3>Selamat Datang di <br><i>Informatics Study Club</i> </h3>

                        <div class="page-links">

                            <a href="<?= base_url('auth') ?>">Login</a><a href="<?= base_url('auth/regis') ?>" class="active">Register</a>

                        </div>

                        <form>

                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>

                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>

                            <input class="form-control" type="password" name="password" placeholder="Password" required>

                            <div class="form-button">

                                <button id="submit" type="submit" class="ibtn">Register</button>

                            </div>

                        </form>

                        <div class="other-links">

                            <span>Copyright &copy; <a href="https://hmif-untan.tech/" target="_blank">HMIF FT UNTAN</a>, All Rights Reserved.</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="<?= base_url('assets/login/') ?>js/jquery.min.js"></script>

    <script src="<?= base_url('assets/login/') ?>js/popper.min.js"></script>

    <script src="<?= base_url('assets/login/') ?>js/bootstrap.min.js"></script>

    <script src="<?= base_url('assets/login/') ?>js/main.js"></script>

</body>



</html>