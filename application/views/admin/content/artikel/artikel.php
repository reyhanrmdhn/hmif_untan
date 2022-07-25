<a href="<?= base_url('content/tambah_artikel') ?>" class="btn btn-info mb-3">Tambah Artikel Baru</a>
<table id="zero_config" class="table table-striped table-hover table-bordered text-center">
    <thead class=" bg-info text-white">
        <tr>
            <th scope="col">No</th>
            <th scope="col" width="150px">Judul</th>
            <th scope="col">Kategori</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($artikel as $m) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $m['judul']; ?></td>
                <td><?= $m['kategori']; ?></td>
                <?php
                $DATE = $m['tanggal'];
                $date_split =  explode('-', $DATE);
                $tanggal = $date_split[2] . '-' . $date_split[1] . '-' . $date_split[0];
                ?>

                <td><?= $tanggal; ?></td>
                <td>
                    <a target="_blank" href="<?= base_url('artikel/read/' . str_replace(' ', '_', $m['judul'])) ?>" class="badge badge-pill badge-info"><i class="mdi mdi-eye px-4"></i></a> <br>
                    <a href=" <?= base_url('content/edit_artikel/' . $m['id']) ?>" class="badge badge-pill badge-info">Edit</a>
                    <a href="#" class="badge badge-pill badge-danger">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>