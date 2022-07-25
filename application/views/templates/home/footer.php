<!--====== Height Emulator Area Start ======-->
<div class="height-emulator d-none d-lg-block"></div>
<!--====== Height Emulator Area End ======-->

<!--====== Footer Area Start ======-->
<footer class="footer-area footer-fixed footer-bg style2">
    <!-- Footer Top -->
    <div class="footer-top ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="<?= base_url('vendor/home/') ?>assets/img/logo/hmif-white.png" alt="" style="width: 200px;height:auto">
                        </a>
                        <table class="mt-4">
                            <tr>
                                <td style="vertical-align: top;"><i class="lni lni-map-marker"></i></td>
                                <td width="5%">&nbsp;</td>
                                <td>Gedung Informatika UNTAN, Jl. Prof. Dr. H. Hadari Nawawi, Pontianak</td>
                            </tr>
                            <tr>
                                <td class="py-3"><i class="lni lni-envelope"></i></td>
                                <td width="5%">&nbsp;</td>
                                <td>hmif@Informatika.untan.ac.id</td>
                            </tr>
                            <tr>
                                <td class="py-2"><i class="lni lni-phone"></i></td>
                                <td width="5%">&nbsp;</td>
                                <td>+62 895 6002 25408 (Raihan)</td>
                            </tr>
                        </table>

                        <!-- Social Icons -->
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="lni lni-facebook-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title mb-2">Shortcut Link</h3>
                        <ul>
                            <li class="py-2"><a href="#">Profil</a></li>
                            <li class="py-2"><a href="#">Gallery</a></li>
                            <li class="py-2"><a href="#">Artikel</a></li>
                            <li class="py-2"><a href="#">Prestasi</a></li>
                            <li class="py-2"><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.9082019711932!2d109.34863339428357!3d-0.05615704603782065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a462b9da73c48db!2sGedung%20Informatika%20Universitas%20Tanjungpura!5e0!3m2!1sen!2sid!4v1627372279467!5m2!1sen!2sid" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copyright Area -->
                    <div class="copyright-area text-center py-4">
                        <!-- Copyright Left -->
                        <p>Copyrights &copy; HMIF <?= date('Y'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->
</div>


<!-- ***** All jQuery Plugins ***** -->


<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="<?= base_url('vendor/home/') ?>assets/js/jquery/jquery.min.js"></script>

<!-- Bootstrap js -->
<script src="<?= base_url('vendor/home/') ?>assets/js/bootstrap/popper.min.js"></script>
<script src="<?= base_url('vendor/home/') ?>assets/js/bootstrap/bootstrap.min.js"></script>

<!-- Plugins js -->
<script src="<?= base_url('vendor/home/') ?>assets/js/plugins/plugins.min.js"></script>

<!-- Active js -->
<script src="<?= base_url('vendor/home/') ?>assets/js/active.js"></script>
<script src="<?= base_url('vendor/home/') ?>assets/js/preloader.js"></script>

<!-- MAGNIFIC LIGHT BOX -->
<script type="text/javascript" src="<?= base_url('vendor/home/') ?>assets/js/magnific-popup/magnific-popup.js"></script>

<script src="<?= base_url('vendor/home/') ?>assets/js/mix/mixitup.min.js"></script>
<script>
    var containerEl = document.querySelector('.containerr');
    var selectFilter = document.querySelector('.select-filter');
    var selectSort = document.querySelector('.select-sort');

    var mixer = mixitup(containerEl);

    selectFilter.addEventListener('change', function() {
        var selector = selectFilter.value;

        mixer.filter(selector);
    });

    selectSort.addEventListener('change', function() {
        var order = selectSort.value;

        mixer.sort(order);
    });
</script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    //GALLERY POPUP
    var gallery = $('.popup-gallery');
    if (gallery.length) {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                }
            }
        });
    }
</script>
</body>

</html>