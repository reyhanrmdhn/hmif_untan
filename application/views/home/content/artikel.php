<section class="bg-primary">
    <div class="container p-3">
        <p>&nbsp;</p>
    </div>
</section>
<!-- ***** FAQ Area Start ***** -->
<section class="section blog-area style-two ptb_100" id="artikel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center wow fadeInDown" data-aos-duration="2s" data-wow-delay="0.4s">
                    <h2 class="text-capitalize">Artikel Terkini</h2>
                    <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php $transition[1] = 'fadeInLeft"'; ?>
            <?php $transition[2] = 'fadeInDown"'; ?>
            <?php $transition[3] = 'fadeInRight"'; ?>
            <?php $x = 1 ?>
            <?php foreach ($artikel as $a) :  ?>
                <div class="col-12 col-lg-4 wow <?= $transition[$x]; ?>" data-aos-duration="2s" data-wow-delay="0.4s">
                    <div class="single-blog res-margin">
                        <div class="blog-thumb">
                            <a href="<?= base_url('artikel/read/' . str_replace(' ', '_', $a['judul'])) ?>"><img src="<?= base_url('assets/images/artikel/' . $a['gambar']) ?>" alt=""></a>
                            <span class="span-style2 bottom-right">
                                <i class="lni lni-tag"></i> &nbsp;
                                <?= $a['kategori']; ?>
                            </span>
                        </div>
                        <div class="blog-content p-4">
                            <ul class="meta-info d-flex justify-content-between" style="list-style: none;">
                                <li><span class="badge-style2"><i class="lni lni-user"></i> &nbsp;HMIF</span></li>
                                <li><span class="badge-style2"><i class="lni lni-calendar"></i> &nbsp;<?= date('d M Y', strtotime($a['tanggal'])); ?></span></a></li>
                            </ul>
                            <h3 class="blog-title my-3" data-toggle="tooltip" data-placement="bottom" title="<?= $a['judul'] ?>"><a href="<?= base_url('artikel/read/' . str_replace(' ', '_', $a['judul'])) ?>"><?= substr($a['judul'], 0, 40); ?>...</a></h3>
                            <p style="text-align: justify;"><?= substr($a['isi'], 0, 120) ?>...</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <?php $x++ ?>
            <?php endforeach; ?>

            <a href="<?= base_url('artikel') ?>" class="btn btn-primary wow fadeInUp" data-aos-duration="2s" data-wow-delay="0.4s" style="margin-top:70px;font-weight:bold;">Lebih Banyak</a>
        </div>
    </div>
</section>
<!-- ***** FAQ Area End ***** -->