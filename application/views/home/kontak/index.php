<!--====== Contact Area Start ======-->
<section id="contact" class="contact-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-12">
                <!-- Contact Us -->
                <div class="contact-us mb-4">
                    <ul style="list-style: none;" class="row">
                        <div class="col-lg-4">
                            <li class="py-2 mb-4 ml-4">
                                <a class="media" href="#">
                                    <div class="social-icon mr-3">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <span class="media-body align-self-center">Gedung Informatika UNTAN, Jl. Prof. Dr. H. Hadari Nawawi, Pontianak</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <li class="py-2 mb-4 ml-5">
                                <a class="media" href="#">
                                    <div class="social-icon mr-3">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <span class="media-body align-self-center">+62 895 6002 25408 (Raihan)</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <li class="py-2 mb-4 ml-5">
                                <a class="media" href="#">
                                    <div class="social-icon mr-3">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <span class="media-body align-self-center">hmif@informatika.untan.ac.id</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 pt-4 pt-md-0">
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

            <div class="col-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.9082019711932!2d109.34863339428357!3d-0.05615704603782065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a462b9da73c48db!2sGedung%20Informatika%20Universitas%20Tanjungpura!5e0!3m2!1sen!2sid!4v1627372279467!5m2!1sen!2sid" width="400" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>

        </div>
    </div>
</section>
<!--====== Contact Area End ======-->