<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('') ?>assets/images/logo2.png">
    <!-- datepicker -->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert-->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- alertifyjs Css -->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />
    <!-- alertifyjs default themes  Css -->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />
    <!-- datepicker -->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Lightbox css -->
    <link href="<?= base_url('vendor/xoric/dist/') ?>assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

</head>

<style>
    ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }

    ul.timeline>li {
        margin: 20px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
</style>