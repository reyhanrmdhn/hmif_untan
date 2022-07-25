<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    public function index()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('artikel_kategori', 'artikel_kategori.id_kategori = artikel.id_kategori');
        $this->db->limit(3);
        $this->db->order_by('artikel.id', 'ASC');
        $data['artikel'] = $this->db->get()->result_array();
        $data['gallery'] = $this->db->get('gallery')->result_array();
        $data['divisi'] = $this->db->get('divisi')->result_array();

        $data['ph'] = $this->db->get_where('divisi', ['id' => 1])->row_array();
        $data['udpj'] = $this->db->get_where('divisi', ['id' => 2])->row_array();
        $data['sdm'] = $this->db->get_where('divisi', ['id' => 3])->row_array();
        $data['kesrut'] = $this->db->get_where('divisi', ['id' => 4])->row_array();
        $data['penristek'] = $this->db->get_where('divisi', ['id' => 5])->row_array();
        $data['kominfo'] = $this->db->get_where('divisi', ['id' => 6])->row_array();


        $this->load->view('templates/home/header');
        $this->load->view('templates/home/navbar');
        $this->load->view('home/page_wrapper', $data);
        $this->load->view('templates/home/footer');
    }

    public function sendMail()
    {
        $data = [
            'pengirim' => $this->input->post('name'),
            'subjek' => $this->input->post('subject'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp'),
            'isi' => $this->input->post('message'),
            'diterima' => date('Y-m-d'),
        ];
        $this->db->insert('inbox', $data);
        $output = ('<div class="alert alert-success" role="alert">Pesan Berhasil Dikirim! </div>');
        echo json_encode($output);
    }
}
