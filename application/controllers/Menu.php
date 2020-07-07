<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');

        is_logged_in();
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        // echo 'Selamat datang ' . $data['user']['fullname'];

        $data['title'] = 'Menu Management';
        $data['menu'] = $this->Menu_model->getAllMenu();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/menu/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function tambahMenu()
    {
        $data['title'] = 'Form Tambah Data Menu';
        $data['menu'] = $this->Menu_model->getAllMenu();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('admin/menu/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Menu_model->tambahDataMenu();
            $this->session->set_flashdata('flash', 'Ditambahkan!');
            redirect('menu');
        }
    }

    public function editMenu($id)
    {
        $data['judul'] = 'Form Edit Data Menu';
        $data['menu'] = $this->Menu_model->getMenuByid($id);

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('admin/menu/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Menu_model->editDataMenu($id);
            $this->session->set_flashdata('flash', 'Diubah!');
            redirect('menu');
        }
    }

    public function hapusDataMenu($id)
    {
        $this->Menu_model->hapusDataMenu($id);
        $this->session->set_flashdata('flash', 'Dihapus!');
        redirect('menu');
    }

    public function submenu()
    {

        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        $data['title'] = 'Submenu Management';

        $data['subMenu'] = $this->Menu_model->getSubMenu();
        $data['menu'] = $this->Menu_model->getAllMenu();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('admin/menu/submenu', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Menu_model->tambahDataSubMenu();
            $this->session->set_flashdata('flash', 'Ditambahkan!');
            redirect('menu/submenu');
        }
    }

    public function editSubMenu($id)
    {
        $data['judul'] = 'Form Edit Data Menu';

        $data['menu'] = $this->Menu_model->getMenuByid($id);
        $data['subMenu'] = $this->Menu_model->getSubMenu();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('admin/menu/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Menu_model->editDataSubMenu($id);
            $this->session->set_flashdata('flash', 'Diubah!');
            redirect('menu/submenu');
        }
    }

    public function hapusSubMenu($id)
    {
        $this->Menu_model->hapusDataSubMenu($id);
        $this->session->set_flashdata('flash', 'Dihapus!');
        redirect('menu/submenu');
    }
}
