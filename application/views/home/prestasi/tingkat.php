<style>
    ul,
    li {
        list-style: none;
    }
</style>
<!-- ***** Blog Area Start ***** -->
<section id="blog" class="section blog blog-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Tingkat : <?= $judul; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php include('side.php') ?>
            <div class="col-12 col-lg-9">
                <div class="row pt-5 pt-lg-0">
                    <?php foreach ($prestasi as $p) : ?>
                        <div class="col-12 col-md-6">
                            <div class="single-blog res-margin">
                                <div class="blog-thumb">
                                    <a href="#">
                                        <img src="<?= base_url('assets/images/prestasi/' . $p['sampul']) ?>" alt="">
                                    </a>
                                    <span class="span-style2 bottom-right">
                                        <i class="lni lni-user"></i> &nbsp;
                                        <?= $p['mahasiswa']; ?>
                                    </span>
                                </div>
                                <div class="blog-content p-4">
                                    <ul class="meta-info d-flex justify-content-between mt-0">
                                        <li><span class="span-style3 navigate">
                                                <i class="fas fa-trophy"></i> <?= $p['prestasi']; ?>
                                                &nbsp;
                                                <i class="lni lni-calendar"></i> <?= $p['tahun']; ?>
                                            </span>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title pb-2"><a href="#"><?= $p['lomba']; ?></a></h3>
                                    <p><?= $p['deskripsi']; ?></p>
                                    <ul class="meta-info d-flex justify-content-between mt-4">
                                        <li><span class="span-style4">
                                                <i class="lni lni-rocket"></i>&nbsp; <?= $p['tingkat']; ?>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="span-style5">
                                                <i class="lni lni-tag"></i>&nbsp; <?= $p['kategori']; ?>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Blog Area End ***** -->