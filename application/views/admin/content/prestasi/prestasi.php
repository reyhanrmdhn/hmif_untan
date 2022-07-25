<a href="#" data-toggle="modal" data-target="#newPrestasiModal" class="btn btn-info mb-3">Tambah Prestasi</a>
<table id="zero_config" class="table table-striped table-hover table-bordered text-center">
    <thead class=" bg-info text-white">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Lomba</th>
            <th scope="col">Kategori</th>
            <th scope="col">Tingkat</th>
            <th scope="col">Tahun</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($prestasi as $m) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $m['lomba']; ?></td>
                <td><?= $m['kategori']; ?></td>
                <td><?= $m['tingkat']; ?></td>
                <td><?= $m['tahun']; ?></td>
                <td>
                    <a href="#" class="badge badge-pill badge-info" data-toggle="modal" data-target="#infoPrestasiModal<?= $m['id'] ?>"><i class="mdi mdi-eye px-4"></i></a> <br>
                    <a href="#" class="badge badge-pill badge-info">Edit</a>
                    <a href="#" class="badge badge-pill badge-danger">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>