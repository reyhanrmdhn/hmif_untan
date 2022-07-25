<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Halaman Admin - HMIF Untan';
        $data['artikel'] = $this->db->get('artikel')->num_rows();
        $data['prestasi'] = $this->db->get('prestasi')->num_rows();
        $data['galeri'] = $this->db->get('gallery')->num_rows();
        $data['inbox'] = $this->db->get('inbox')->num_rows();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/index');
        $this->load->view('templates/admin/footer');
    }
    public function menu_active()
    {
        $active = 1;
        $data = array(
            'is_active' => $active,
        );
        $this->db->where('menu =', 'Menu');
        $this->db->update('admin_menu', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Menu Management Activated!
        </div>');
        redirect('setting');
    }
    public function inbox()
    {
        $data['title'] = 'Halaman Admin - Kontak Masuk';
        $data['inbox'] = $this->db->get('inbox')->result_array();
        $data['starred'] = $this->db->get_where('inbox', ['is_starred' => 1])->result_array();
        $data['star_num'] = $this->db->get_where('inbox', ['is_starred' => 1])->num_rows();
        $data['read_num'] = $this->db->get_where('inbox', ['is_read' => 0])->num_rows();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/inbox', $data);
        $this->load->view('templates/admin/footer', $data);
    }
    public function starMail()
    {
        $id = $this->input->post('id');
        $data = [
            'id' => $id
        ];

        $input = [
            'is_starred' => '1'
        ];
        $input2 = [
            'is_starred' => '0'
        ];

        $result = $this->db->get_where('inbox', $data)->row_array();

        if ($result['is_starred'] == 0) {
            $this->db->where('id', $id);
            $this->db->update('inbox', $input);
        } else {
            $this->db->where('id', $id);
            $this->db->update('inbox', $input2);
        }
        $output = ('<div class="alert alert-success" role="alert">Edited! </div>');
        echo json_encode($output);
    }

    public function checkRead()
    {
        $id = $this->input->post('id');
        $read = $this->input->post('read');
        $data = [
            'id' => $id,
            'is_read' => $read
        ];

        $input = [
            'is_read' => '1'
        ];

        $result = $this->db->get_where('inbox', $data)->row_array();

        if ($result['is_read'] == 0) {
            $this->db->where('id', $id);
            $this->db->update('inbox', $input);
        }
        // $output = ('<div class="alert alert-success" role="alert">Read! </div>');
        // echo json_encode($output);
    }
}
