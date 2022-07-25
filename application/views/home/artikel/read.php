<style>
    ul,
    li {
        list-style: none;
    }
</style>
<!-- ***** Blog Area Start ***** -->
<section id="blog" class="section blog blog-area ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <!-- Single Blog Details -->
                <article class="single-blog-details">
                    <!-- Blog Thumb -->
                    <div class="blog-thumb">
                        <h3 class="blog-title pb-3" style="font-size:40px"><a href="#"><?= $blog['judul']; ?></a></h3>
                        <a href="#"><img src="<?= base_url('assets/images/artikel/' . $blog['gambar']) ?>" alt=""></a>
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content sApp-blog">
                        <!-- Meta Info -->
                        <div class="meta-info d-flex flex-wrap align-items-center py-2">
                            <ul class="mt-2">
                                <?php
                                $DATE = $blog['tanggal'];
                                $date_split =  explode('-', $DATE);
                                $tanggal = $date_split[2] . '-' . $date_split[1] . '-' . $date_split[0];
                                ?>
                                <li class="d-inline-block"><span class="badge-style2"><i class="lni lni-user"></i> &nbsp;HMIF</span></li>
                                <li class="d-inline-block"><span class="badge-style2"><i class="lni lni-calendar"></i> &nbsp;<?= date('d M Y', strtotime($tanggal)); ?></span></li>
                                <li class="d-inline-block"><span class="badge-style2"><i class="fas fa-tag"></i> &nbsp;<?= $blog['kategori']; ?></span></li>
                            </ul>
                            <!-- Blog Share -->
                            <div class="blog-share ml-auto d-none d-sm-block">
                                <!-- Social Icons -->
                                <div class="social-icons d-flex justify-content-center">
                                    <a class="bg-white facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="bg-white twitter" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="bg-white google-plus" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Details -->
                        <div class="blog-details mt-3" style="text-align: justify;">
                            <?= $blog['isi']; ?>
                        </div>
                    </div>

                    <!-- Blog Comments -->
                    <!-- <div class="blog-comments">
                        <div class="admin media">
                            <div class="admin-content media-body mt-3">
                            </div>
                        </div>

                        <div class="comments my-3">
                            <h3 class="comments-title text-uppercase text-right mb-3">Recent Comments</h3>
                            <div class="single-comments media p-3 p-lg-4">
                                <div class="comments-thumb avatar-lg">
                                    <img class="rounded-circle" src="<?= base_url('vendor/home2/') ?>assets/img/avatar/avatar-2.png" alt="">
                                </div>
                                <div class="comments-content media-body pl-3">
                                    <h5 class="d-flex mb-2">
                                        <a href="#">Jonayed Hasan</a>
                                        <a href="#" class="ml-auto">Reply</a>
                                    </h5>
                                    <p class="d-none d-lg-block">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                    <p class="d-block d-lg-none">Many desktop publishing packages and web page editors now use.</p>
                                </div>
                            </div>

                            <div class="single-comments media p-3 p-lg-4">
                                <div class="comments-thumb avatar-lg">
                                    <img class="rounded-circle" src="<?= base_url('vendor/home2/') ?>assets/img/avatar/avatar-3.png" alt="">
                                </div>
                                <div class="comments-content media-body pl-3">
                                    <h5 class="d-flex mb-2">
                                        <a href="#">Jassica William</a>
                                        <a href="#" class="ml-auto">Reply</a>
                                    </h5>
                                    <p class="d-none d-lg-block">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                                    <p class="d-block d-lg-none">But I must explain to you how all this mistaken idea.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="blog-contact mt-4">
                        <h3 class="comments-title text-uppercase text-right mb-3">Post your Comments</h3>
                        <div class="contact-box comment-box">
                            <form method="POST" action="#">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-bordered" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                </article>
            </div>
            <?php include('side.php') ?>
        </div>
    </div>
</section>
<!-- ***** Blog Area End ***** -->