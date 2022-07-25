<a href="#" data-toggle="modal" data-target="#newKategoriModal" class="btn btn-info mb-3">Tambah Kategori Baru</a>
<table id="zero_config2" class="table table-striped table-hover table-bordered text-center">
    <thead class="bg-info text-white">
        <tr>
            <th scope="col">No</th>
            <th scope="col" width="150px">Tingkat</th>
            <th scope="col">Total Prestasi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php $x = 0; ?>
        <?php foreach ($kategori as $m) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $m['kategori']; ?></td>
                <td>
                    <?php $row = $this->db->get_where('prestasi', ['id_kategori' => $m['id_kategori']])->num_rows(); ?>
                    <?= $row; ?>
                </td>
                <td>
                    <a href="#" class="badge badge-pill badge-info edit-kategori-prestasi" data-id="<?= $m['id_kategori'] ?>" data-kategori="<?= $m['kategori'] ?>">Edit</a>
                    <a href="#" class="badge badge-pill badge-danger">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php $x++; ?>
        <?php endforeach; ?>
    </tbody>
</table>

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
            <form action="<?= base_url('content/add_kategori_prestasi'); ?>" method="POST">
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

<div class="modal fade" id="editKategoriPrestasiModal" tabindex="-1" aria-labelledby="editKategoriPrestasiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editKategoriPrestasiModallLabel">Edit Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('content/edit_kategori_prestasi'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control kategori" id="kategori" name="kategori" placeholder="Nama Kategori">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" class="id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>