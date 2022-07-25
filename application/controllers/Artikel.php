<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Artikel';
        $data['home'] = 'Home';

        $data['kategori'] = $this->db->get('artikel_kategori')->result_array();

        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('artikel_kategori', 'artikel_kategori.id_kategori = artikel.id_kategori');
        $data['artikel'] = $this->db->get()->result_array();

        $data['num_kategori'] = $this->db->get('artikel_kategori')->num_rows();
        $data['num_artikel'] = $this->db->get('artikel')->num_rows();
        $num_kategori = $this->db->get('artikel_kategori')->num_rows();
        for ($i = 0; $i < $num_kategori; $i++) {
            $data['row'][$i] = $this->db->get_where('artikel', ['id_kategori' => $i])->num_rows();
        }

        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/artikel/index');
        $this->load->view('templates/home/footer');
    }

    public function read($judul)
    {
        $data['title'] = 'Artikel';
        $data['home'] = 'Home';
        $judull = str_replace('_', ' ', $judul);

        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('artikel_kategori', 'artikel_kategori.id_kategori = artikel.id_kategori');
        $this->db->where('artikel.judul', $judull);
        $data['blog'] = $this->db->get()->row_array();

        $data['kategori'] = $this->db->get('artikel_kategori')->result_array();
        $data['artikel'] = $this->db->get('artikel')->result_array();
        $data['num_kategori'] = $this->db->get('artikel_kategori')->num_rows();
        $data['num_artikel'] = $this->db->get('artikel')->num_rows();
        $num_kategori = $this->db->get('artikel_kategori')->num_rows();
        for ($i = 0; $i < $num_kategori; $i++) {
            $data['row'][$i] = $this->db->get_where('artikel', ['id' => $i])->num_rows();
        }

        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/artikel/read');
        $this->load->view('templates/home/footer');
    }

    public function kategori($kategori)
    {
        $data['title'] = 'Artikel';
        $data['home'] = 'Home';
        $data['judul'] = $kategori;

        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('artikel_kategori', 'artikel_kategori.id_kategori = artikel.id_kategori');
        $this->db->where('artikel_kategori.kategori', $kategori);
        $data['artikel_kategori'] = $this->db->get()->result_array();

        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('artikel_kategori', 'artikel_kategori.id_kategori = artikel.id_kategori');
        $data['artikel'] = $this->db->get()->result_array();

        $data['kategori'] = $this->db->get('artikel_kategori')->result_array();
        $data['num_kategori'] = $this->db->get('artikel_kategori')->num_rows();
        $data['num_artikel'] = $this->db->get('artikel')->num_rows();
        $num_kategori = $this->db->get('artikel_kategori')->num_rows();
        for ($i = 0; $i < $num_kategori; $i++) {
            $data['row'][$i] = $this->db->get_where('artikel', ['id' => $i])->num_rows();
        }

        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/artikel/kategori');
        $this->load->view('templates/home/footer');
    }
}
