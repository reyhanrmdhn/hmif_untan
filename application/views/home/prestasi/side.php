<div class="col-12 col-lg-3">
    <aside class="sidebar">
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
                        <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion1">Kategori
                        </a>
                    </h5>
                    <!-- Category Widget Content -->
                    <div id="accordion1" class="accordion-content widget-content collapse show" data-parent="#cat-accordion">
                        <!-- Category Widget Items -->
                        <ul class="widget-items">
                            <?php foreach ($kategori as $k) : ?>
                                <?php $row = $this->db->get_where('prestasi', ['id_kategori' => $k['id_kategori']])->num_rows(); ?>
                                <li>
                                    <a href="<?= base_url('prestasi/kategori/' . $k['kategori']) ?>" class="d-flex p-3 <?php if ($this->uri->segment(3) == $k['kategori']) { ?> active <?php } ?>">
                                        <span><?= $k['kategori']; ?></span><span class="ml-auto">(<?= $row; ?>)</span>
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
                        <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion3">Tingkat
                        </a>
                    </h5>
                    <!-- Tags Widget Content -->
                    <div id="accordion3" class="accordion-content widget-content collapse show" data-parent="#tags-accordion">
                        <!-- Tags Widget Items -->
                        <div class="widget-content tags-widget-items pt-2">
                            <?php foreach ($tingkat as $t) : ?>
                                <?php $row = $this->db->get_where('prestasi', ['id_tingkat' => $t['id_tingkat']])->num_rows(); ?>
                                <a href="<?= base_url('prestasi/tingkat/' . $t['tingkat']) ?>" class="d-inline-block mt-2 mr-1 px-2 py-1"><?= $t['tingkat']; ?> (<?= $row; ?>)</a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>