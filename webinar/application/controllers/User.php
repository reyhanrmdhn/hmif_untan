<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('Pdf');
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
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('webinar', 'webinar.id = peserta.id_webinar');
        $this->db->where('peserta.id_user = ', $this->session->userdata('id'));
        $data['webinar'] = $this->db->get()->result_array();
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('webinar', 'webinar.id = peserta.id_webinar');
        $this->db->where('peserta.id_user = ', $this->session->userdata('id'));
        $data['webinar_num'] = $this->db->get()->num_rows();
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('webinar', 'webinar.id = peserta.id_webinar');
        $this->db->where('peserta.id_user = ', $this->session->userdata('id'));
        $this->db->where('peserta.absen = ', 1);
        $data['webinar_num_selesai'] = $this->db->get()->num_rows();
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('webinar', 'webinar.id = peserta.id_webinar');
        $this->db->where('peserta.id_user = ', $this->session->userdata('id'));
        $this->db->where('peserta.absen = ', 1);
        $this->db->where('peserta.sertifikat != ', '');
        $data['webinar_num_sertifikat'] = $this->db->get()->num_rows();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates/admin/footer', $data);
    }
    public function webinar()
    {
        $id = $this->uri->segment(3);
        if ($id == NULL) {
            $data['title'] = 'List Webinar';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->db->select('*');
            $this->db->from('webinar');
            $data['webinar'] = $this->db->get()->result_array();
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('webinar/index', $data);
            $this->load->view('templates/admin/footer', $data);
        } else {
            $this->db->select('*');
            $this->db->from('webinar');
            $this->db->join('peserta', 'peserta.id_webinar = webinar.id');
            $this->db->where('webinar.id =', $id);
            $this->db->where('peserta.id_user =', $this->session->userdata('id'));
            $redirect = $this->db->get()->num_rows();
            if ($redirect == 0) {
                redirect('user/info_webinar/' . $id);
            } else {
                $data['title'] = 'Info Webinar';
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $this->db->select('*');
                $this->db->from('peserta');
                $this->db->join('webinar', 'webinar.id = peserta.id_webinar');
                $this->db->where('webinar.id = ', $id);
                $data['webinar'] = $this->db->get()->row_array();
                $this->db->select('*');
                $this->db->from('peserta');
                $this->db->join('webinar', 'webinar.id = peserta.id_webinar');
                $this->db->where('peserta.id_webinar = ', $id);
                $this->db->where('peserta.id_user = ', $this->session->userdata('id'));
                $this->db->where('peserta.absen = ', 1);
                $data['presensi'] = $this->db->get()->num_rows();
                $this->db->select('*');
                $this->db->from('peserta');
                $this->db->join('webinar', 'webinar.id = peserta.id_webinar');
                $this->db->where('peserta.id_webinar = ', $id);
                $this->db->where('peserta.id_user = ', $this->session->userdata('id'));
                $this->db->where('peserta.absen = ', 1);
                $data['sertifikat'] = $this->db->get()->row_array();
                $this->load->view('templates/admin/header', $data);
                $this->load->view('templates/admin/sidebar', $data);
                $this->load->view('templates/admin/topbar', $data);
                $this->load->view('webinar/webinar_detail', $data);
                $this->load->view('templates/admin/footer', $data);
            }
        }
    }
    public function info_webinar($id)
    {
        $data['title'] = 'Info Webinar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->select('*');
        $this->db->from('webinar');
        $this->db->where('webinar.id = ', $id);
        $data['webinar'] = $this->db->get()->row_array();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('webinar/info_webinar', $data);
        $this->load->view('templates/admin/footer', $data);
    }
    public function download_sertifikat($nama, $id)
    {
        $t_koma = str_replace('%2C', ',', $nama);
        $t_titik = str_replace('%2E', '.', $t_koma);
        $nama_serti = str_replace('_', ' ', $t_titik);
        function AddText($pdf, $text, $x, $y, $a, $f, $t, $s, $r, $g, $b)
        {
            $pdf->AddFont('Poppins', '', 'poppins-bold.php');
            $pdf->SetFont($f, $t, $s);
            $pdf->SetXY($x, $y);
            $pdf->SetTextColor($r, $g, $b);
            $pdf->Cell(0, 10, $text, 0, 0, $a);
        }
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        //Create A 4 Landscape page
        $pdf = new FPDF('L', 'mm', 'A4');
        $pdf->AddFont('Poppins', '', 'poppins-bold.php');
        $pdf->AddPage();
        // Add background image for PDF
        $serti = $this->db->get_where('webinar', ['id' => $id])->row_array();
        $pdf->Image(base_url('assets/images/sertifikat/' . $serti['sertifikat']), 0, 0);
        //Add a Name to the certificate
        AddText($pdf, ucwords($nama_serti), 10, 75, 'C', 'Poppins', '', 30, 3, 84, 156);
        $pdf->Output();
    }
    public function changePassword()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        // $this->form_validation->set_rules('new_password', 'New Password', 'required|trim|matches[new_password2]');
        // $this->form_validation->set_rules('new_password2', 'Repeat Password', 'required|trim|matches[new_password]');
        if ($this->form_validation->run() ==  false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Ada yang salah, silahkan input kembali!
            </div>');
            redirect('user');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');
            if (!password_verify($current_password, $user['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Current Password!
                </div>');
                redirect('user');
            } else if ($current_password == $new_password) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                New Password cannot be the same as current password!
                </div>');
                redirect('user');
            } else {
                $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                $this->db->set('password', $password_hash);
                $this->db->where('email', $this->session->userdata('email'));
                $this->db->update('user');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed!
                </div>');
                redirect('user');
            }
        }
    }
    public function edit()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Fullname', 'required|trim');
        if ($this->form_validation->run() ==  false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Ada yang salah, silahkan input kembali!
            </div>');
            redirect('user');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //cek jika ada gambar yg di upload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/images/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                    $this->db->where('id', $user['id']);
                    $this->db->update('user');
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'name' => $name,
                'email' => $email,
            ];
            $this->db->where('id', $user['id']);
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile Has Been Updated!
          </div>');
            redirect('user');
        }
    }
}
