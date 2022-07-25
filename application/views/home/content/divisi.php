 <!-- ***** Features Area Start ***** -->
 <section id="features" class="section features-area style-two ptb_100">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-12 col-md-10 col-lg-8">
                 <!-- Section Heading -->
                 <div class="section-heading text-center wow fadeInDown" data-aos-duration="2s" data-wow-delay="0.4s">
                     <h2>Divisi HMIF</h2>
                     <p class="d-none d-sm-block mt-4">Kepengurusan HMIF 2021 terdiri dari 6 badan pengurus dan 60 anggota bermandat dengan tugas dan program kerja yang berbeda.</p>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-12 col-md-6 col-lg-4 res-margin">
                 <a href="javascript:void(0)" data-toggle="modal" data-target="#infoPHModal1">
                     <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.4s">
                         <div class="featured-img mb-3">
                             <img class="avatar-md" src="<?= base_url('vendor/home/') ?>assets/img/icon/divisi/ph.svg" alt="">
                         </div>
                         <div class="icon-text">
                             <h3 class="pb-3">Pengurus Harian</h3>
                             <br>
                         </div>
                     </div>
                 </a>
             </div>

             <div class="col-12 col-md-6 col-lg-4 res-margin">
                 <a href="javascript:void(0)" data-toggle="modal" data-target="#infoPHModal2">
                     <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s" data-wow-delay="0.2s">
                         <div class="featured-img mb-3">
                             <img class="avatar-md" src="<?= base_url('vendor/home/') ?>assets/img/icon/divisi/udpj.svg" alt="">
                         </div>
                         <div class="icon-text">
                             <h3 class="mb-2">Divisi Usaha Dana, Profesi dan Jasa</h3>
                         </div>
                     </div>
                 </a>
             </div>

             <div class="col-12 col-md-6 col-lg-4 res-margin">
                 <a href="javascript:void(0)" data-toggle="modal" data-target="#infoPHModal3">
                     <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-aos-duration="2s" data-wow-delay="0.4s">
                         <div class="featured-img mb-3">
                             <img class="avatar-md" src="<?= base_url('vendor/home/') ?>assets/img/icon/divisi/sdm.svg" alt="">
                         </div>
                         <div class="icon-text">
                             <h3 class="mb-2">Divisi Sumber daya Mahasiswa</h3>
                         </div>
                     </div>

                 </a>
             </div>

             <div class="col-12 col-md-6 col-lg-4 res-margin">
                 <a href="javascript:void(0)" data-toggle="modal" data-target="#infoPHModal4">
                     <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.8s">
                         <div class="featured-img mb-3">
                             <img class="avatar-md" src="<?= base_url('vendor/home/') ?>assets/img/icon/divisi/kesrut.svg" alt="">
                         </div>
                         <div class="icon-text">
                             <h3 class="mb-2">Divisi Kesejahteraan Rumah Tangga</h3>
                         </div>
                     </div>
                 </a>
             </div>

             <div class="col-12 col-md-6 col-lg-4 res-margin">
                 <a href="javascript:void(0)" data-toggle="modal" data-target="#infoPHModal5">
                     <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s" data-wow-delay="0.4s">
                         <div class="featured-img mb-3">
                             <img class="avatar-md" src="<?= base_url('vendor/home/') ?>assets/img/icon/divisi/penristek.svg" alt="">
                         </div>
                         <div class="icon-text">
                             <h3 class="mb-2">Divisi Pendidikan dan Riset Teknologi</h3>
                         </div>
                     </div>
                 </a>
             </div>

             <div class="col-12 col-md-6 col-lg-4 res-margin">
                 <a href="javascript:void(0)" data-toggle="modal" data-target="#infoPHModal6">
                     <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-aos-duration="2s" data-wow-delay="0.8s">
                         <div class="featured-img mb-3">
                             <img class="avatar-md" src="<?= base_url('vendor/home/') ?>assets/img/icon/divisi/kominfo.svg" alt="">
                         </div>
                         <div class="icon-text">
                             <h3 class="mb-2">Divisi Komunikasi dan Informasi</h3>
                         </div>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Features Area End ***** -->

 <?php foreach ($divisi as $div) :  ?>
     <div class="modal fade" id="infoPHModal<?= $div['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="infoPHModal" aria-hidden="true">
         <div class="modal-dialog modal-md modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-body">
                     <div class="row">
                         <div class="col-lg-12 mb-2" style="text-align: center;">
                             <img src="<?= base_url('assets/images/divisi/' . $div['icon']) ?>" width="70px" height="auto">
                         </div>
                         <div class="col-lg-12" style="text-align: center;">
                             <h3 class="box-title m-t-15 mb-3"><?= $div['nama_divisi'] ?></h3>
                             <p>
                                 <?= $div['detail']; ?>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 <?php endforeach; ?>