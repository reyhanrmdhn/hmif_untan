<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-right">
    <p>Copyrights &copy; HMIF <?= date('Y'); ?></p>
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="<?= base_url('vendor/admin/') ?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url('vendor/admin/') ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="<?= base_url('vendor/admin/') ?>dist/js/app.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>dist/js//app.init.mini-sidebar.js"></script>
<script src="<?= base_url('vendor/admin/') ?>dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url('vendor/admin/') ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= base_url('vendor/admin/') ?>dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url('vendor/admin/') ?>dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url('vendor/admin/') ?>dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<!-- <script src="<?= base_url('vendor/admin/') ?>assets/libs/chartist/dist/chartist.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> -->
<!--c3 charts -->
<script src="<?= base_url('vendor/admin/') ?>assets/extra-libs/c3/d3.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>assets/extra-libs/c3/c3.min.js"></script>
<!--chartjs -->
<!-- <script src="<?= base_url('vendor/admin/') ?>assets/libs/raphael/raphael.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>assets/libs/morris.js/morris.min.js"></script> -->

<!-- <script src="<?= base_url('vendor/admin/') ?>dist/js/pages/dashboards/dashboard1.js"></script> -->

<!-- select2 -->
<script src="<?= base_url('vendor/admin/') ?>assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>assets/libs/select2/dist/js/select2.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>dist/js/pages/forms/select2/select2.init.js"></script>
<!-- select2 -->

<!-- table -->
<!--This page JavaScript -->
<script src="<?= base_url('vendor/admin/') ?>assets/libs/footable/dist/footable.all.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>dist/js/pages/tables/footable-init.js"></script>
<!-- table -->

<!-- sweetalert -->
<script src="<?= base_url('vendor/admin/') ?>assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>assets/libs/sweetalert2/sweet-alert.init.js"></script>
<!-- sweetalert -->

<!--datatables plugins -->
<script src="<?= base_url('vendor/admin/') ?>assets/extra-libs/DataTables/datatables.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>dist/js/pages/datatable/datatable-basic.init.js"></script>
<!--datatables plugins -->
<script src="<?= base_url('vendor/admin/') ?>dist/js/pages/dashboards/dashboard1.js"></script>
<!-- <script src="<?= base_url('vendor/admin/') ?>dist/js/pages/email/email.js"></script> -->

<!--Morris JavaScript -->
<script src="<?= base_url('vendor/admin/') ?>assets/libs/raphael/raphael.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>assets/libs/morris.js/morris.min.js"></script>
<script src="<?= base_url('vendor/admin/') ?>dist/js/pages/morris/morris-data.js"></script>

<script>
    function goBack() {
        window.history.back();
    }

    Morris.Area({
        element: 'extra-area-chart',
        data: [{
                period: '<?= date('Y') ?>-01',
                Artikel: 0,
            }, {
                period: '<?= date('Y') ?>-02',
                Artikel: 50,
            }, {
                period: '<?= date('Y') ?>-03',
                Artikel: 20,
            }, {
                period: '<?= date('Y') ?>-04',
                Artikel: 60,
            }, {
                period: '<?= date('Y') ?>-05',
                Artikel: 30,
            }, {
                period: '<?= date('Y') ?>-06',
                Artikel: 25,
            }, {
                period: '<?= date('Y') ?>-07',
                Artikel: 10,
            }, {
                period: '<?= date('Y') ?>-08',
                Artikel: 50,
            }, {
                period: '<?= date('Y') ?>-09',
                Artikel: 0,
            }, {
                period: '<?= date('Y') ?>-10',
                Artikel: 60,
            }, {
                period: '<?= date('Y') ?>-11',
                Artikel: 30,
            }, {
                period: '<?= date('Y') ?>-12',
                Artikel: 0,
            }

        ],
        lineColors: ['#66ccff'],
        xkey: 'period',
        ykeys: ['Artikel'],
        labels: ['Artikel'],
        pointSize: 0,
        lineWidth: 0,
        resize: true,
        fillOpacity: 0.8,
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        hideHover: 'auto'

    });


    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script>
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: 'UDPJ',
            a: 100,
        }, {
            y: 'SDM',
            a: 75,
        }, {
            y: 'KESRUT',
            a: 50,
        }, {
            y: 'PENRISTEK',
            a: 75,
        }, {
            y: 'KOMINFO',
            a: 50,
        }, {
            y: 'HIMPUNAN',
            a: 75,
        }],
        xkey: 'y',
        ykeys: ['a', ],
        labels: ['Barang'],
        barColors: ['#0099ff'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
</script>

<script>
    <?php foreach ($inbox as $ib) :  ?>
        var mail = $('.email-table .max-texts .detail-<?= $ib['id'] ?>');
        $(mail).on("click", function() {
            $('.right-part.mail-list').fadeOut("fast");
            $('.right-part.mail-details-<?= $ib['id'] ?>').fadeIn("fast");
        });
        $("#back_to_inbox<?= $ib['id'] ?>").on("click", function() {
            $('.right-part.mail-details-<?= $ib['id'] ?>').fadeOut("fast");
            $('.right-part.mail-list').fadeIn("fast");
        });
    <?php endforeach; ?>

    $('.starred').on('click', function() {
        const id = $(this).data('id');

        $.ajax({
            url: "<?= base_url('admin/starMail'); ?>",
            type: "POST",
            data: {
                id: id
            },
            async: true,
            dataType: 'JSON',
            success: function(response) {
                // Set the message text.
                $("#alert").html(response);
            }
        })

    });


    $('.check-read').on('click', function() {
        const id = $(this).data('id');
        const read = $(this).data('read');

        $.ajax({
            url: "<?= base_url('admin/checkRead'); ?>",
            type: "POST",
            data: {
                id: id,
                read: read
            },
            async: true,
            dataType: 'JSON',
        })

    });
</script>
<script>
    $(document).ready(function() {
        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "<?= base_url('menu/changeaccess'); ?>",
                type: "post",
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "<?= base_url('menu/roleAccess/'); ?>" + roleId;
                }
            })

        });

        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });

        // get Edit Menu
        $('.edit-menu').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const menu = $(this).data('menu');
            // Set data to Form Edit
            $('.id').val(id);
            $('.menu').val(menu).trigger('change');
            // Call Modal Edit
            $('#editMenuModal').modal('show');
        });

        // get Edit Kategori
        $('.edit-kategori').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const kategori = $(this).data('kategori');
            // Set data to Form Edit
            $('.id').val(id);
            $('.kategori').val(kategori).trigger('change');
            // Call Modal Edit
            $('#editKategoriModal').modal('show');
        });

        // get Edit Kategori-prestasi
        $('.edit-kategori-prestasi').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const kategori = $(this).data('kategori');
            // Set data to Form Edit
            $('.id').val(id);
            $('.kategori').val(kategori).trigger('change');
            // Call Modal Edit
            $('#editKategoriPrestasiModal').modal('show');
        });

        // get Edit Submenu
        $('.edit-submenu').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const menu = $(this).data('menu');
            const title = $(this).data('title');
            const url = $(this).data('url');
            const icon = $(this).data('icon');
            // Set data to Form Edit
            $('.id').val(id);
            $('.menu').val(menu);
            $('.title').val(title);
            $('.url').val(url);
            $('.icon').val(icon).trigger('change');
            // Call Modal Edit
            $('#editSubMenuModal').modal('show');
        });

        // get Edit Pengurus
        $('.edit-pengurus').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const jabatan = $(this).data('jabatan');
            const divisi = $(this).data('divisi');
            // Set data to Form Edit
            $('.id').val(id);
            $('.nama').val(nama);
            $('.jabatan').val(jabatan);
            $('.divisi').val(divisi).trigger('change');
            // Call Modal Edit
            $('#editPengurusModal').modal('show');
        });
    });
</script>
</body>

</html>