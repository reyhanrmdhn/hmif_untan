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
                    <h2 class="text-capitalize">Kategori : <?= $judul; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <?php foreach ($artikel_kategori as $a) :  ?>
                        <div class="col-12 col-md-6">
                            <div class="single-blog res-margin">
                                <div class="blog-thumb">
                                    <a href="<?= base_url('artikel/read/' . str_replace(' ', '_', $a['judul'])) ?>"><img src="<?= base_url('assets/images/artikel/' . $a['gambar']) ?>" alt=""></a>
                                    <span class="span-style2 bottom-right">
                                        <i class="lni lni-tag"></i> &nbsp;
                                        <?= $a['kategori']; ?>
                                    </span>
                                </div>
                                <div class="blog-content p-4">
                                    <ul class="meta-info d-flex justify-content-between">
                                        <li><span class="badge-style2"><i class="lni lni-user"></i> &nbsp;HMIF</span></li>
                                        <li><span class="badge-style2"><i class="lni lni-calendar"></i> &nbsp;<?= date('d M Y', strtotime($a['tanggal'])); ?></span></a></li>
                                    </ul>
                                    <h3 class="blog-title my-3"><a href="<?= base_url('artikel/read/' . str_replace(' ', '_', $a['judul'])) ?>"><?= substr($a['judul'], 0, 50); ?>...</a></h3>
                                    <p style="text-align: justify;"><?= substr($a['isi'], 0, 150) ?>...</p>
                                    <a href="#" class="blog-btn mt-3">Read More</a>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>

            <?php include('side.php') ?>
        </div>
    </div>
</section>
<!-- ***** Blog Area End ***** -->