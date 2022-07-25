<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="<?= base_url('assets/images/logo2.png') ?>" alt="" width="20px;" height="auto"> &nbsp; Copyright &copy; HMIF FT UNTAN <?= date('Y') ?>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/node-waves/waves.min.js"></script>

<!-- <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script> -->

<!-- datepicker -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/air-datepicker/js/datepicker.min.js"></script>
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/air-datepicker/js/i18n/datepicker.en.js"></script>

<!-- apexcharts -->
<!-- <script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/apexcharts/apexcharts.min.js"></script> -->

<!-- <script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/jquery-knob/jquery.knob.min.js"></script> -->
<!-- <script src="<?= base_url('vendor/xoric/dist/') ?>assets/js/pages/dashboard.init.js"></script> -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/js/app.js"></script>
<!-- Sweet Alerts js -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
<!-- Sweet alert init js-->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/js/pages/sweet-alerts.init.js"></script>
<!-- alertifyjs js -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/alertifyjs/build/alertify.min.js"></script>
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/js/pages/alertifyjs.init.js"></script>
<!-- validation init -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/js/pages/form-validation.init.js"></script>
<!-- Required datatable js -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/js/pages/datatables.init.js"></script>

<!-- Isotope Filter -->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Magnific Popup-->
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('vendor/xoric/dist/') ?>assets/js/pages/gallery.init.js"></script>

<script>
    $(document).ready(function() {
        // get Edit Product
        $('.btn-import').on('click', function() {
            // get data from button edit
            const user_id = $(this).data('user_id');
            // Set data to Form Edit
            $('.user_id').val(user_id).trigger('change');
            // Call Modal Edit
            $('#importModal').modal('show');
        });

        $('.btn-import2').on('click', function() {
            // get data from button edit
            const user_id = $(this).data('user_id');
            // Set data to Form Edit
            $('.user_id').val(user_id).trigger('change');
            // Call Modal Edit
            $('#importModal2').modal('show');
        });

        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    });
</script>
</body>

</html>