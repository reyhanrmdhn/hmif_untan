<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Prestasi Mahasiswa';
        $data['home'] = 'Home';

        $this->db->select('*');
        $this->db->from('prestasi');
        $this->db->join('prestasi_kategori', 'prestasi_kategori.id_kategori = prestasi.id_kategori');
        $this->db->join('prestasi_tingkat', 'prestasi_tingkat.id_tingkat = prestasi.id_tingkat');
        $data['prestasi'] = $this->db->get()->result_array();

        $data['kategori'] = $this->db->get('prestasi_kategori')->result_array();
        $data['tingkat'] = $this->db->get('prestasi_tingkat')->result_array();

        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/prestasi/index');
        $this->load->view('templates/home/footer');
    }

    public function kategori($kategori)
    {
        $data['title'] = 'Prestasi Mahasiswa';
        $data['home'] = 'Home';
        $data['judul'] = $kategori;
        $data['kategori'] = $this->db->get('prestasi_kategori')->result_array();
        $data['tingkat'] = $this->db->get('prestasi_tingkat')->result_array();

        $this->db->select('*');
        $this->db->from('prestasi');
        $this->db->join('prestasi_kategori', 'prestasi_kategori.id_kategori = prestasi.id_kategori');
        $this->db->join('prestasi_tingkat', 'prestasi_tingkat.id_tingkat = prestasi.id_tingkat');
        $this->db->where('prestasi_kategori.kategori', $kategori);
        $data['prestasi'] = $this->db->get()->result_array();

        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/prestasi/kategori');
        $this->load->view('templates/home/footer');
    }

    public function tingkat($tingkat)
    {
        $data['title'] = 'Prestasi Mahasiswa';
        $data['home'] = 'Home';
        $data['judul'] = $tingkat;
        $data['kategori'] = $this->db->get('prestasi_kategori')->result_array();
        $data['tingkat'] = $this->db->get('prestasi_tingkat')->result_array();

        $this->db->select('*');
        $this->db->from('prestasi');
        $this->db->join('prestasi_kategori', 'prestasi_kategori.id_kategori = prestasi.id_kategori');
        $this->db->join('prestasi_tingkat', 'prestasi_tingkat.id_tingkat = prestasi.id_tingkat');
        $this->db->where('prestasi_tingkat.tingkat', $tingkat);
        $data['prestasi'] = $this->db->get()->result_array();

        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/prestasi/tingkat');
        $this->load->view('templates/home/footer');
    }
}
