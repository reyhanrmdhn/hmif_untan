<section class="bg-primary">
    <div class="container p-3">
        <p>&nbsp;</p>
    </div>
</section>
<!--====== Contact Area Start ======-->
<section id="contact" class="contact-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center wow fadeInDown" data-aos-duration="2s" data-wow-delay="0.2s">
                    <h2 class="text-capitalize">Kontak Kami</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-md-7 pt-4 pt-md-0 wow fadeInRight" data-aos-duration="2s" data-wow-delay="0.4s">
                <!-- Contact Box -->
                <div class="contact-box text-center">
                    <!-- Contact Form -->
                    <div class="form-message my-3"></div>
                    <form id="contact-form" method="POST" action="<?= base_url('home/sendMail') ?>">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Your Subject" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telp" placeholder="Your Phone" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-block mt-3"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-md-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.4s">
                <!-- Contact Us -->
                <div class="contact-us">
                    <ul style="list-style: none;">
                        <li class="py-2 mb-4 ml-5">
                            <a class="media" href="#">
                                <div class="social-icon mr-3">
                                    <i class="fas fa-home"></i>
                                </div>
                                <span class="media-body align-self-center">Gedung Informatika UNTAN, Jl. Prof. Dr. H. Hadari Nawawi, Pontianak</span>
                            </a>
                        </li>
                        <li class="py-2 mb-4 ml-5">
                            <a class="media" href="#">
                                <div class="social-icon mr-3">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <span class="media-body align-self-center">+62 895 6002 25408 (Raihan)</span>
                            </a>
                        </li>
                        <li class="py-2 mb-4 ml-5">
                            <a class="media" href="#">
                                <div class="social-icon mr-3">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <span class="media-body align-self-center">hmif@informatika.untan.ac.id</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!--====== Contact Area End ======-->