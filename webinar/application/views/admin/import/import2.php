
<?php
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['file']['name'], 0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['file']['name'], false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index = 0);

$id = $this->input->post('user_id');
for ($i = 2; $i <= $jumlah_baris; $i++) {
    // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
    $import = array(
        'id_webinar' => $data->val($i, 1),
        'id_user' => $data->val($i, 2),
        'absen' => $data->val($i, 3),
        'sertifikat' => $data->val($i, 4),
    );
    $this->db->insert("peserta", $import);
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);
$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
Data Telah Ditambahkan!
</div>');
redirect(base_url('admin/users'));
?>