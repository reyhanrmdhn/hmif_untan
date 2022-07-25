<div class="col-12 col-lg-3">
    <aside class="sidebar pt-5 pt-lg-0">
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Search Widget -->
            <div class="widget-content search-widget">
                <form action="#">
                    <input type="text" placeholder="Enter your keywords">
                </form>
            </div>
        </div>

        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Category Widget -->
            <div class="accordions widget catagory-widget" id="cat-accordion">
                <div class="single-accordion blog-accordion">
                    <h5>
                        <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion1">Categories
                        </a>
                    </h5>
                    <!-- Category Widget Content -->
                    <div id="accordion1" class="accordion-content widget-content collapse show" data-parent="#cat-accordion">
                        <!-- Category Widget Items -->
                        <ul class="widget-items">
                            <?php $x = 0; ?>
                            <?php foreach ($kategori as $k) :  ?>
                                <?php $row = $this->db->get_where('artikel', ['id_kategori' => $k['id_kategori']])->num_rows(); ?>
                                <li><a href="<?= base_url('artikel/kategori/' . $k['kategori']) ?>" class="d-flex p-3 <?php if ($this->uri->segment(3) == $k['kategori']) { ?> active <?php } ?>"><span><?= $k['kategori']; ?></span><span class="ml-auto">(<?= $row; ?>)</span></a></li>
                                <?php $x++; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Post Widget -->
            <div class="accordions widget post-widget" id="post-accordion">
                <div class="single-accordion">
                    <h5>
                        <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion2">Artikel Terkini
                        </a>
                    </h5>
                    <!-- Post Widget Content -->
                    <div id="accordion2" class="accordion-content widget-content collapse show" data-parent="#post-accordion">
                        <!-- Post Widget Items -->
                        <ul class="widget-items">
                            <?php foreach ($artikel as $ar) :  ?>
                                <li>
                                    <a href="#" class="single-post align-items-center align-items-lg-start media p-3">
                                        <!-- Post Thumb -->
                                        <div class="post-thumb avatar-md">
                                            <img class="align-self-center" src="<?= base_url('assets/images/artikel/' . $ar['gambar']) ?>" alt="">
                                        </div>
                                        <?php
                                        $DATE = $ar['tanggal'];
                                        $date_split =  explode('-', $DATE);
                                        $tgl = $date_split[2] . '-' . $date_split[1] . '-' . $date_split[0];
                                        ?>

                                        <div class="post-content media-body pl-3">
                                            <p class="post-date mb-2"><?php date('d M Y', strtotime($tgl)) ?></p>
                                            <h6 onclick="window.location.href='<?= base_url('artikel/read/' . str_replace(' ', '_', $ar['judul'])) ?>'"><?= substr($ar['judul'], 0, 30); ?>...</h6>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Tags Widget -->
            <div class="accordions widget tags-widget" id="tags-accordion">
                <div class="single-accordion blog-accordion">
                    <h5>
                        <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion3">Kategori
                        </a>
                    </h5>
                    <!-- Tags Widget Content -->
                    <div id="accordion3" class="accordion-content widget-content collapse show" data-parent="#tags-accordion">
                        <!-- Tags Widget Items -->
                        <div class="widget-content tags-widget-items pt-2">
                            <a href="<?= base_url('artikel') ?>" class="d-inline-block mt-2 mr-1 px-2 py-1">Semua (<?= $num_artikel; ?>)</a>
                            <?php $x = 0; ?>
                            <?php foreach ($kategori as $k) :  ?>
                                <?php $row = $this->db->get_where('artikel', ['id_kategori' => $k['id_kategori']])->num_rows(); ?>
                                <a href="<?= base_url('artikel/kategori/' . $k['kategori']) ?>" class="d-inline-block mt-2 mr-1 px-2 py-1"><?= $k['kategori']; ?> (<?= $row; ?>)</a>
                                <?php $x++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>