 <div class="page-wrapper">

     <div class="page-breadcrumb">
         <div class="row">
             <div class="col-5 align-self-center">
                 <h4 class="page-title"><?= $title ?></h4>
                 <div class="d-flex align-items-center">

                 </div>
             </div>
         </div>
     </div>

     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-3">
                 <?= $this->session->flashdata('message'); ?>
                 <?php if (validation_errors()) : ?>
                     <div class="alert alert-danger" role="alert">
                         <?= validation_errors(); ?>
                     </div>
                 <?php endif; ?>
             </div>
         </div>

         <div class="card-group">
             <div class="card">
                 <div class="card-body">
                     <div class="d-flex align-items-center">
                         <div class="m-r-10">
                             <span class="btn btn-circle btn-lg" style="background-color:#66ccff">
                                 <i class="icon-Newspaper text-white"></i>
                             </span>
                         </div>
                         <div>
                             Total Artikel
                         </div>
                         <div class="ml-auto">
                             <h2 class="m-b-0 font-light"><?= $artikel; ?></h2>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="card">
                 <div class="card-body">
                     <div class="d-flex align-items-center">
                         <div class="m-r-10">
                             <span class="btn btn-circle btn-lg" style="background-color: #3399ff;">
                                 <i class=" icon-Trophy text-white"></i>
                             </span>
                         </div>
                         <div>
                             Total Prestasi
                         </div>
                         <div class="ml-auto">
                             <h2 class="m-b-0 font-light"><?= $prestasi; ?></h2>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="card">
                 <div class="card-body">
                     <div class="d-flex align-items-center">
                         <div class="m-r-10">
                             <span class="btn btn-circle btn-lg" style="background-color: #3333ff;">
                                 <i class="icon-Photo text-white"></i>
                             </span>
                         </div>
                         <div>
                             Total Galeri
                         </div>
                         <div class="ml-auto">
                             <h2 class="m-b-0 font-light"><?= $galeri; ?></h2>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="card">
                 <div class="card-body">
                     <div class="d-flex align-items-center">
                         <div class="m-r-10">
                             <span class="btn btn-circle btn-lg" style="background-color: #6600ff;">
                                 <i class=" icon-Inbox-Into text-white"></i>
                             </span>
                         </div>
                         <div>
                             Inbox
                         </div>
                         <div class="ml-auto">
                             <h2 class="m-b-0 font-light"><?= $inbox; ?></h2>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Grafik Postingan HMIF Tahun <?= date('Y'); ?></h4>
                         <ul class="list-inline text-center m-t-40">
                             <li class="list-inline-item">
                                 <h5><i class="fa fa-circle m-r-5" style="color: #66ccff;"></i>Artikel</h5>
                             </li>
                         </ul>
                         <div id="extra-area-chart"></div>
                     </div>
                 </div>
             </div>
         </div>

     </div>