<section id="team" class="team style3 section py-5">
    <div class="container">
        <?php $x = 0; ?>
        <?php foreach ($divisi as $div) :  ?>
            <?php $pengurus = $div['id'][$x]; ?>
            <div class="row">
                <div class="col-12">
                    <div class="section-title style3 align-center mt-5">
                        <img class="avatar-md wow fadeInDown" data-wow-delay=".2s" src="<?= base_url('vendor/home/assets/img/icon/divisi/' . $div['icon']) ?>" alt="">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s" style="font-size: 30px;color:black;margin-top:10px"><?php if ($div['id'] != 1) { ?>
                                Divisi
                            <?php } ?> <?= $div['nama_divisi']; ?></h2>
                    </div>
                </div>
            </div>

            <?php
            $queryPengurus = "SELECT * FROM `kepengurusan`  WHERE `id_divisi` = $pengurus";
            $anggota = $this->db->query($queryPengurus)->result_array();
            ?>
            <div class="row">
                <?php foreach ($anggota as $p) : ?>
                    <div class="col-sm-3 mx-auto">
                        <div class="single-team wow fadeInDown" data-wow-delay=".3s">
                            <div class="image">
                                <img src="<?= base_url('assets/images/team/' . $p['image']) ?>" alt="#">
                                <ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-behance-original"></i></a></li>
                                </ul>
                            </div>
                            <div class="info-head">
                                <div class="info-box">
                                    <h4 class="name"><a href="team-single.html"><?= $p['nama']; ?></a></h4>
                                    <span class="designation"><?= $p['jabatan']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

    </div>
</section>