<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('email');
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['webinar'] = $this->db->get_where('webinar')->result_array();
        $data['peserta'] = $this->db->get_where('peserta')->num_rows();
        $data['total_webinar'] = $this->db->get_where('webinar')->num_rows();
        $data['berlangsung'] = $this->db->get_where('webinar', ['status' => 1])->num_rows();
        $data['selesai'] = $this->db->get_where('webinar', ['status' => 2])->num_rows();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function tambah_webinar()
    {
        $data['title'] = 'Tambah Webinar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/tambah_webinar', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function add_webinar()
    {
        // $data_filer = $this->input->post('kategori');
        // if ($kategori == 'data') {
        //     $data_filer = '';
        // }

        // $config['upload_path'] = './assets/images/webinar/';
        // $config['allowed_types'] = 'gif|jpg|png|JPG|PNG';
        // $config['max_size']      = '10000';
        // $this->load->library('upload', $config);

        // if ($this->upload->do_upload('image')) {
        //     $data = [
        //         'tema' => $this->input->post('tema'),
        //         'sub_tema' => $this->input->post('subtema'),
        //         'kategori' => $kategori,
        //         'narasumber' => $this->input->post('narsum'),
        //         'tanggal' => $this->input->post('tanggal'),
        //         'poster' => $this->upload->data('file_name'),
        //         'data_filter' => $data_filter,
        //         'status' => 0
        //     ];
        //     $this->db->insert('webinar', $data);

        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        //     Berhasil Menambahkan Webinar!
        //     </div>');
        //     redirect('admin/dashboard');
        // } else {
        //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        //     Foto Belum dimasukkan!
        //     </div>');
        //     redirect('admin/tambah_webinar');
        // }
    }

    public function info_webinar($id)
    {
        $data['title'] = 'Info Webinar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['webinar'] = $this->db->get_where('webinar', ['id' => $id])->row_array();
        $data['peserta'] = $this->db->get_where('peserta_webinar3')->num_rows();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/info_webinar', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function peserta($id)
    {
        $data['title'] = 'Info Peserta Webinar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['webinar'] = $this->db->get_where('webinar', ['id' => $id])->row_array();

        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('user', 'user.id = peserta.id_user');
        $this->db->join('webinar', 'webinar.id = peserta.id_webinar');
        $this->db->where('peserta.id_webinar = ', $id);
        $data['peserta'] = $this->db->get()->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/peserta', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function invite_peserta()
    {
        $id_webinar = $this->input->post('id_webinar');
        $this->_sendMail('invite');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Email Undangan Grup WhatsApp Sudah Dikirimkan ke Peserta!
        </div>');
        redirect('admin/peserta/' . $id_webinar);
    }

    private function _sendMail($type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://mail.hmif-untan.tech',
            'smtp_user' => 'webinar@hmif-untan.tech',
            'smtp_pass' => 'webinarhmif',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'validate'  => TRUE,
            'priority'  => 1,
            'newline'   => "\r\n"
        ];
        $this->email->initialize($config);

        $this->email->from('webinar@hmif-untan.tech', 'Panitia Webinar HMIF');
        $this->email->to($this->input->post('email'));

        $data = array(
            'email' =>  $this->input->post('email'),
        );

        if ($type == 'invite') {
            $this->email->subject('Join Grup Peserta Webinar');
            $this->email->message($this->load->view('auth/email_invite', $data, true));
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function users()
    {
        $data['title'] = 'Info Peserta Webinar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['peserta'] = $this->db->get_where('user')->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/users', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function import_data()
    {
        $this->load->view('admin/import/import.php');
    }
    public function import_data2()
    {
        $this->load->view('admin/import/import2.php');
    }
}
