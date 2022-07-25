<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kesrut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function dashboard()
    {
        $data['title'] = 'Admin Kesrut - HMIF Untan';
        $data['barang'] = $this->db->get('inventaris')->num_rows();
        $data['bagus'] = $this->db->get_where('inventaris', ['kondisi' => 'Bagus'])->num_rows();
        $data['sedang'] = $this->db->get_where('inventaris', ['kondisi' => 'Sedang'])->num_rows();
        $data['rusak'] = $this->db->get_where('inventaris', ['kondisi' => 'Rusak'])->num_rows();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/kesrut/dashboard');
        $this->load->view('templates/admin/footer');
    }

    public function inventaris()
    {
        $data['title'] = 'Inventaris Himpunan';

        $this->db->select('*');
        $this->db->from('divisi');
        $this->db->where('id != ', '1');
        $data['bidang'] = $this->db->get()->result_array();

        $this->db->select('*');
        $this->db->from('inventaris');
        $this->db->join('divisi', 'divisi.id = inventaris.id_bidang');
        $data['barang'] = $this->db->get()->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/kesrut/inventaris');
        $this->load->view('templates/admin/footer');
    }

    public function add_barang()
    {
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('kondisi', 'kondisi', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Data Barang Tidak Lengkap!
      </div>');
            redirect('kesrut/inventaris');
        } else {
            $kode = '';
            $barang_bid = [];
            $kode_bid = [];

            for ($j = 2; $j <= 6; $j++) {
                if ($j == 2) {
                    $kode_bid[$j] = 'udpj';
                } else  if ($j == 3) {
                    $kode_bid[$j] = 'sdm';
                } else  if ($j == 4) {
                    $kode_bid[$j] = 'kesrut';
                } else  if ($j == 5) {
                    $kode_bid[$j] = 'penristek';
                } else  if ($j == 6) {
                    $kode_bid[$j] = 'kominfo';
                }
            }

            $barang_bid = $this->input->post('bidang');
            if ($barang_bid == 1) {
                $row2 = $this->db->get_where('inventaris', ['id_bidang' => 1])->num_rows();
                $row2plus = $row2 + 1;
                $char = strlen($row2);
                if ($char > 1) {
                    $kode = 'hmif0' . $row2plus;
                } else {
                    $kode = 'hmif00' . $row2plus;
                }
            } else {
                $row3 = $this->db->get_where('inventaris', ['id_bidang' => $this->input->post('bidang')])->num_rows();
                $index = $this->input->post('bidang');
                $char2 = strlen($row3);

                if ($row3 == 0) {
                    $row3plus = 1;
                } else {
                    $row3plus = $row3 + 1;
                }

                if ($char2 > 1) {
                    $kode = $kode_bid[$index] . '0' . $row3plus;
                } else {
                    $kode = $kode_bid[$index] . '00' . $row3plus;
                }
            }

            $data = [
                'nama_barang' => $this->input->post('nama'),
                'kode_barang' => $kode,
                'merk' => $this->input->post('merk'),
                'tipe' => $this->input->post('tipe'),
                'tahun_pengadaan' => $this->input->post('tahun'),
                'harga_pengadaan' => $this->input->post('harga'),
                'kondisi' => $this->input->post('kondisi'),
                'id_bidang' => $this->input->post('bidang'),
            ];
            $this->db->insert('inventaris', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Barang Telah Ditambahkan!
            </div>');
            redirect('kesrut/inventaris');
        }
    }
}
