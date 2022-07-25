<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function profil()
    {
        $data['title'] = 'Profil HMIF';
        $data['home'] = 'About';
        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/about/profil');
        $this->load->view('templates/home/footer');
    }
    public function kepengurusan()
    {
        $data['title'] = 'Kepengurusan HMIF';
        $data['home'] = 'About';

        $this->db->select('*');
        $this->db->from('divisi');
        $data['divisi'] = $this->db->get()->result_array();

        $data['p_harian'] = $this->db->get_where('kepengurusan', ['id_divisi' => 1])->result_array();
        $data['udpj'] = $this->db->get_where('kepengurusan', ['id_divisi' => 2])->result_array();
        $data['sdm'] = $this->db->get_where('kepengurusan', ['id_divisi' => 3])->result_array();

        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/about/kepengurusan', $data);
        $this->load->view('templates/home/footer');
    }

    public function divisi()
    {
        $data['title'] = 'Badan Pengurus HMIF';
        $data['home'] = 'About';

        $data['divisi'] = $this->db->get('divisi')->result_array();
        $data['ph'] = $this->db->get_where('divisi', ['id' => 1])->row_array();
        $data['udpj'] = $this->db->get_where('divisi', ['id' => 2])->row_array();
        $data['sdm'] = $this->db->get_where('divisi', ['id' => 3])->row_array();
        $data['kesrut'] = $this->db->get_where('divisi', ['id' => 4])->row_array();
        $data['penristek'] = $this->db->get_where('divisi', ['id' => 5])->row_array();
        $data['kominfo'] = $this->db->get_where('divisi', ['id' => 6])->row_array();

        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/content/divisi');
        $this->load->view('templates/home/footer');
    }
}
