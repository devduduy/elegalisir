<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koresponden extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Koresponden_model');

        is_logged_in();
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        // echo 'Selamat datang ' . $data['user']['fullname'];

        $data['title'] = 'Question Management';
        $data['question'] = $this->Koresponden_model->getAllMenuQuestion();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/koresponden/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function tambahQuestion()
    {
        $data['title'] = 'Form Tambah Data Question';
        $data['question'] = $this->Koresponden_model->getAllMenuQuestion();

        $this->form_validation->set_rules('question', 'Question', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('admin/koresponden/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Koresponden_model->tambahDataQuestion();
            $this->session->set_flashdata('flash', 'Ditambahkan!');
            redirect('koresponden');
        }
    }

    public function editQuestion($id)
    {
        $data['judul'] = 'Form Edit Data Question';
        $data['question'] = $this->Koresponden_model->getQuestionByid($id);

        $this->form_validation->set_rules('question', 'Question', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('admin/koresponden/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Koresponden_model->editDataQuestion($id);
            $this->session->set_flashdata('flash', 'Diubah!');
            redirect('koresponden');
        }
    }

    public function hapusQuestion($id)
    {
        $this->Koresponden_model->hapusDataQuestion($id);
        $this->session->set_flashdata('flash', 'Dihapus!');
        redirect('koresponden');
    }

    public function answer()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        // echo 'Selamat datang ' . $data['user']['fullname'];

        $data['title'] = 'Answer Management';
        $data['answer'] = $this->Koresponden_model->getAllMenuAnswer();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/koresponden/answer', $data);
        $this->load->view('templates/admin/footer');
    }
}
