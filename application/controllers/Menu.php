<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['menu'] = $this->db->get('admin_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('admin/menu/index', $data);
            $this->load->view('templates/admin/footer', $data);
        } else {
            $this->db->insert('admin_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Menu Added!
          </div>');
            redirect('menu');
        }
    }
    public function submenu()
    {
        $this->load->model('Menu_model', 'menu');

        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('admin_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('admin/menu/submenu', $data);
            $this->load->view('templates/admin/footer', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('admin_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Submenu Added!
          </div>');
            redirect('menu/submenu');
        }
    }
    public function delete($id)
    {
        $this->db->delete('admin_sub_menu', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Submenu Deleted!
        </div>');
        redirect('menu/submenu');
    }
    function edit_submenu()
    {
        $this->load->model('Menu_model', 'submenu');
        $id = $this->input->post('id');
        $data = array(
            'title'  => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
        );
        $this->submenu->subMenuEdit($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Submenu Edited!
        </div>');
        redirect('menu/submenu');
    }
    public function activation($id)
    {
        $is_active = ['is_active' => 1];
        $this->db->where('id', $id);
        $this->db->update('admin_sub_menu', $is_active);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Submenu Activate!
          </div>');
        redirect('menu/submenu');
    }
    public function deleteActivation($id)
    {
        $is_active = ['is_active' => 0];
        $this->db->where('id', $id);
        $this->db->update('admin_sub_menu', $is_active);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
            Submenu Disabled!
          </div>');
        redirect('menu/submenu');
    }
    public function activate_menu($id)
    {
        $is_active = ['is_active' => 1];
        $this->db->where('id', $id);
        $this->db->update('admin_menu', $is_active);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu Activated!
          </div>');
        redirect('menu');
    }
    public function edit_menu()
    {
        $id = $this->input->post('id');
        $menu = ['menu' => $this->input->post('menu')];
        $this->db->where('id', $id);
        $this->db->update('admin_menu', $menu);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu Edited!
          </div>');
        redirect('menu');
    }
    public function delete_menu($id)
    {
        $this->db->delete('admin_menu', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Menu Deleted!
        </div>');
        redirect('menu');
    }
    public function disable_menu($id)
    {
        $is_active = ['is_active' => 0];
        $this->db->where('id', $id);
        $this->db->update('admin_menu', $is_active);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
            Menu Disabled!
          </div>');
        if ($id == 2) {
            redirect('admin');
        } else {
            redirect('menu');
        }
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['role'] = $this->db->get('admin_role')->result_array();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/menu/role', $data);
        $this->load->view('templates/admin/footer', $data);
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['role'] = $this->db->get_where('admin_role', ['id' => $role_id])->row_array();
        $data['menu'] = $this->db->get('admin_menu')->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/menu/role-access', $data);
        $this->load->view('templates/admin/footer', $data);
    }
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('admin_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('admin_access_menu', $data);
        } else {
            $this->db->delete('admin_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Access Changed!
          </div>');
    }
}
