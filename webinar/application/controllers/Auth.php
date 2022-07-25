<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim');
        $this->form_validation->set_rules('password', 'Password');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else { //validasi sukses
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) { //jika login dengan HANKAM
            if (password_verify($password, $user['password'])) {
                if ($user['is_active'] == '1') { //akun aktif
                    $data = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($data['role_id'] == 1) {
                        redirect('admin');
                    } else if ($data['role_id'] == 2) {
                        redirect('user');
                    }
                } else { //akun tidak aktif
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Email belum diaktivasi!
                    </div>');
                    redirect('auth');
                }
            } else { //salah password
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password salah!
                    </div>');
                redirect('auth');
            }
        } else { //belum registrasi
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Akun anda belum terdaftar!
             </div>');
            redirect('auth');
        }
    }

    public function regis()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                'is_unique' => 'This Email has already registered!'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $this->load->helper('date');
            $format = "%Y-%m-%d %h:%i %a";
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'telp' => $this->input->post('telp'),
                'instansi' => $this->input->post('instansi'),
                'image' => 'isr.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => @mdate($format)
            ];

            $this->db->insert('user', $data);

            // siapkan token
            // $email = $this->input->post('email', true);
            // $token = base64_encode(random_bytes(32));
            // $user_token = [
            //     'email' => $email,
            //     'token' => $token,
            //     'date_created' => time()
            // ];

            // $this->db->insert('user_token', $user_token);
            // $this->_sendMail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil mendaftar!
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('auth');
    }
    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
