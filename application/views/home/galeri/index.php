<!-- ***** Team Area Start ***** -->
<section class="section team-area team-style-two overflow-hidden ptb_100" id="gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Galeri Kami</h2>
                    <p class="d-none d-sm-block mt-4">Kumpulan dokumentasi kegiatan yang diselenggarakan oleh Himpunan Mahasiswa Informatika UNTAN</p>
                </div>
            </div>
        </div>
        <div class="containerr">
            <div class="row popup-gallery">
                <?php foreach ($gallery as $g) : ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mix kategori-15">
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <a href="<?= base_url('assets/images/gallery/' . $g['gambar']) ?>" title="Junaid Hasan">
                                <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                    <img src="<?= base_url('assets/images/gallery/' . $g['thumbnail']) ?>" alt="">
                                    <div class="team-overlay">
                                        <h3 class="team-name text-white px-3"><?= $g['judul']; ?></h3>
                                        <button type="button" class="py-2 px-3 bottom-rightt btn-drive" style="background-color:white" onclick=" window.open('<?= $g['link'] ?>', '_blank');"><i class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-12 blog mt-5 text-center">
                <a href="<?= base_url('galeri') ?>" class="btn">Lebih Banyak</a>
            </div>
        </div> -->
    </div>

    </div>
</section>
<!-- ***** Team Area End ***** -->