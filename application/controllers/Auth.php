<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // public function add_admin()
    // {
    //     $password = 'kesruthmif';
    //     $data = [
    //         'name' => 'Kesrut',
    //         'username' => 'adminkesrut',
    //         'password' => password_hash($password, PASSWORD_DEFAULT),
    //         'image' => 'default.png',
    //         'role_id' => '2',
    //         'is_active' => '1',
    //         'date_created' => date('Y-m-d')
    //     ];
    //     $this->db->insert('admin', $data);
    //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //         Admin added!
    //       </div>');
    //     redirect('auth');
    // }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim');
        $this->form_validation->set_rules('password', 'Password');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else { //validasi sukses
            $this->_login();
        }
    }


    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('admin', ['username' => $username])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                if ($user['is_active'] == '1') { //akun aktif
                    $data = [
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                    ];

                    $this->session->set_userdata($data);
                    if ($data['role_id'] == 1) {
                        redirect('admin');
                    } else if ($data['role_id'] == 2) {
                        redirect('kesrut/dashboard');
                    }
                } else { //akun tidak aktif
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    This Email is not activated yet!
                    </div>');
                    redirect('auth');
                }
            } else { //salah password
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Password!
                </div>');
                redirect('auth');
            }
        } else { //belum registrasi
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This Email is not Registered!
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out!
          </div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/forbidden');
    }
}
