<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Hubungi Kami';
        $data['home'] = 'Kontak';
        $this->load->view('templates/home/header');
        $this->load->view('templates/home/page_navbar', $data);
        $this->load->view('templates/home/page_header');
        $this->load->view('home/kontak/index');
        $this->load->view('templates/home/footer');
    }
}
