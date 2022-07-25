<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <h4 class="page-title">
                    <?= $title ?>
                </h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <?= $this->session->flashdata('message'); ?>
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs customtab mt-2" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#artikel" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-newspaper"></i></span> <span class="hidden-xs-down">Artikel</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#kategori" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-tag"></i></span> <span class="hidden-xs-down">Kategori</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active p-2 mt-4" id="artikel" role="tabpanel">
                        <?php include('artikel.php') ?>
                    </div>
                    <div class="tab-pane p-2 mt-4" id="kategori" role="tabpanel">
                        <?php include('kategori.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newKategoriModal" tabindex="-1" aria-labelledby="newKategoriModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newKategoriModallLabel">Tambah Kategori Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('content/add_kategori'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Nama Kategori">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>