<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Settings';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['divisi'] = $this->db->get('divisi')->result_array();
        $data['profil_menu'] = $this->db->get('profil_menu')->result_array();
        $data['pengurus'] = $this->db->get('kepengurusan')->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/setting/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function tambah_pengurus()
    {
        $config['upload_path']          = './assets/images/team/';
        $config['allowed_types']        = 'png|jpg|jpeg';
        $config['max_size']             = '10000';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Gambar Harus Dimasukkan!
              </div>');
            redirect('setting');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'id_divisi' => $this->input->post('divisi'),
                'image' => $this->upload->data('file_name'),
            ];
            $this->db->insert('kepengurusan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Pengurus Telah Ditambahkan!
                </div>');
            redirect('setting');
        }
    }

    public function edit_pengurus()
    {
        $config['upload_path']          = './assets/images/team/';
        $config['allowed_types']        = 'png|jpg|jpeg';
        $config['max_size']             = '10000';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            if ($this->input->post('divisi_edit') == NULL) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'id_divisi' => $this->input->post('divisi'),
                    'image' => $this->upload->data('file_name'),
                ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('kepengurusan', $data);
            } else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'id_divisi' => $this->input->post('divisi_edit'),
                    'image' => $this->upload->data('file_name'),
                ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('kepengurusan', $data);
            }
        } else {
            if ($this->input->post('divisi_edit') == NULL) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'id_divisi' => $this->input->post('divisi'),
                ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('kepengurusan', $data);
            } else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'id_divisi' => $this->input->post('divisi_edit'),
                ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('kepengurusan', $data);
            }
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Pengurus Telah Diedit!
            </div>');
        redirect('setting');
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kepengurusan');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Deleted!
        </div>');
        redirect('setting');
    }

    public function edit_divisi()
    {
        $config['upload_path']          = './assets/images/divisi/';
        $config['allowed_types']        = 'png|jpg|jpeg|svg';
        $config['max_size']             = '10000';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('icon')) {
            $data = [
                'nama_divisi' => $this->input->post('nama'),
                'detail' => $this->input->post('detail'),
                'icon' => $this->upload->data('file_name'),
            ];
        } else {
            $data = [
                'nama_divisi' => $this->input->post('nama'),
                'detail' => $this->input->post('detail'),
            ];
        }
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('divisi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Divisi Telah Diubah!
                </div>');
        redirect('setting');
    }
}
