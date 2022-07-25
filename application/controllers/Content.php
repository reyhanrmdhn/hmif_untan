<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function artikel()
    {
        $data['title'] = 'Content Management - Artikel';
        $data['kategori'] = $this->db->get('artikel_kategori')->result_array();

        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('artikel_kategori', 'artikel_kategori.id_kategori = artikel.id_kategori');
        $data['artikel'] = $this->db->get()->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/content/artikel/page_wrapper');
        $this->load->view('templates/admin/footer');
    }
    public function tambah_artikel()
    {
        $data['title'] = 'Content Management - Tambah Artikel';
        $data['kategori'] = $this->db->get('artikel_kategori')->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/content/artikel/tambah_artikel');
        $this->load->view('templates/admin/footer');
    }
    public function add_artikel()
    {
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Artikel Tidak Lengkap!
          </div>');
            redirect('content/tambah_artikel');
        } else {
            $config['upload_path']          = './assets/images/artikel/';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $config['max_size']             = '2048';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Gambar Harus Dimasukkan Sebagai Sampul!
              </div>');
                redirect('content/tambah_artikel');
            } else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'id_kategori' => $this->input->post('kategori'),
                    'isi' => $this->input->post('isi'),
                    'gambar' => $this->upload->data('file_name'),
                    'tanggal' => date('Y-m-d'),
                ];
                $this->db->insert('artikel', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Artikel Telah Ditambahkan!
                </div>');
                redirect('content/artikel');
            }
        }
    }

    public function edit_artikel($id)
    {
        $data['title'] = 'Content Management - Edit Artikel';
        $data['kategori'] = $this->db->get('artikel_kategori')->result_array();
        $data['edit'] = $this->db->get_where('artikel', ['id' => $id])->row_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/content/artikel/edit_artikel.php');
        $this->load->view('templates/admin/footer');
    }

    public function edit_artikel_cont()
    {
        $id = $this->input->post('id');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Artikel Tidak Lengkap!
          </div>');
            redirect('content/edit_artikel');
        } else {
            $config['upload_path']          = './assets/images/artikel/';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $config['max_size']             = '2048';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'id_kategori' => $this->input->post('kategori'),
                    'isi' => $this->input->post('isi'),
                    'gambar' => $this->upload->data('file_name'),
                ];
            } else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'id_kategori' => $this->input->post('kategori'),
                    'isi' => $this->input->post('isi'),
                ];
                $this->db->where('id', $id);
                $this->db->update('artikel', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Artikel Telah Diubah!
                </div>');
                redirect('content/artikel');
            }
        }
    }

    public function add_kategori()
    {
        $kategori = $this->input->post('kategori');
        $this->db->insert('artikel_kategori', ['kategori' => $kategori]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kategori Baru Telah Ditambahkan!
          </div>');
        redirect('content/artikel');
    }

    public function edit_kategori()
    {
        $kategori = $this->input->post('kategori');
        $id = $this->input->post('id');

        $this->db->where('id_kategori', $id);
        $this->db->update('artikel_kategori', ['kategori' => $kategori]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kategori Telah Diubah!
          </div>');
        redirect('content/artikel');
    }

    public function prestasi()
    {
        $data['title'] = 'Content Management - Prestasi';

        $this->db->select('*');
        $this->db->from('prestasi');
        $this->db->join('prestasi_kategori', 'prestasi_kategori.id_kategori = prestasi.id_kategori');
        $this->db->join('prestasi_tingkat', 'prestasi_tingkat.id_tingkat = prestasi.id_tingkat');
        $data['prestasi'] = $this->db->get()->result_array();

        $data['kategori'] = $this->db->get('prestasi_kategori')->result_array();
        $data['tingkat'] = $this->db->get('prestasi_tingkat')->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/content/prestasi/page_wrapper');
        $this->load->view('templates/admin/footer');
    }

    public function add_prestasi()
    {
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('lomba', 'lomba', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('mahasiswa', 'mahasiswa', 'required');
        $this->form_validation->set_rules('prestasi', 'prestasi', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('tingkat', 'tingkat', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Prestasi Tidak Lengkap!
          </div>');
            redirect('content/prestasi');
        } else {
            $config['upload_path']          = './assets/images/prestasi/';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $config['max_size']             = '2048';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('sampul')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Gambar Harus Dimasukkan Sebagai Sampul!
              </div>');
                redirect('content/prestasi');
            } else {
                $data = [
                    'lomba' => $this->input->post('lomba'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'sampul' => $this->upload->data('file_name'),
                    'mahasiswa' => $this->input->post('mahasiswa'),
                    'prestasi' => $this->input->post('prestasi'),
                    'tahun' => $this->input->post('tahun'),
                    'id_kategori' => $this->input->post('kategori'),
                    'id_tingkat' => $this->input->post('tingkat'),
                ];
                $this->db->insert('prestasi', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Prestasi Telah Ditambahkan!
                </div>');
                redirect('content/prestasi');
            }
        }
    }

    public function add_kategori_prestasi()
    {
        $kategori = $this->input->post('kategori');
        $this->db->insert('prestasi_kategori', ['kategori' => $kategori]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kategori Baru Telah Ditambahkan!
          </div>');
        redirect('content/prestasi');
    }

    public function edit_kategori_prestasi()
    {
        $kategori = $this->input->post('kategori');
        $id = $this->input->post('id');

        $this->db->where('id_kategori', $id);
        $this->db->update('prestasi_kategori', ['kategori' => $kategori]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kategori Telah Diubah!
          </div>');
        redirect('content/prestasi');
    }

    public function add_tingkat_prestasi()
    {
        $tingkat = $this->input->post('tingkat');
        $this->db->insert('prestasi_tingkat', ['tingkat' => $tingkat]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Tingkat Prestasi Baru Telah Ditambahkan!
          </div>');
        redirect('content/prestasi');
    }


    public function gallery()
    {
        $data['title'] = 'Content Management - Gallery';
        $data['gallery'] = $this->db->get('gallery')->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/content/gallery.php');
        $this->load->view('templates/admin/footer');
    }

    public function add_gallery()
    {
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('link', 'link', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Gallery Tidak Lengkap!
          </div>');
            redirect('content/gallery');
        } else {
            $config['upload_path']          = './assets/images/gallery/';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $config['max_size']             = '10000';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar_galeri')) {
                $data = [
                    'gambar' => $this->upload->data('file_name'),
                    'judul' => $this->input->post('judul'),
                    'link' => $this->input->post('link'),
                ];
                $this->db->insert('gallery', $data);
            }
            if ($this->upload->do_upload('sampul')) {
                $this->db->select_max('id');
                $this->db->from('gallery');
                $id = $this->db->get()->row_array();

                $data = [
                    'thumbnail' => $this->upload->data('file_name'),
                ];
                $this->db->where('id', $id['id']);
                $this->db->update('gallery', $data);
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Gallery Telah Ditambahkan!
                </div>');
            redirect('content/gallery');
        }
    }
}
