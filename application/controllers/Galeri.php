<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Galeri Kami';
        $data['home'] = 'Home';
        $data['gallery'] = $this->db->get('gallery')->result_array();

        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/galeri/index');
        $this->load->view('templates/home/footer');
    }
}
