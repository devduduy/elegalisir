<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dekan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Dashboard_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        // echo 'Selamat datang ' . $data['user']['fullname'];

        $data['title'] = 'Dashboard Dekan';

        $data['belumBayar'] = $this->Dashboard_model->JumlahBerkasBelumBayar();
        $data['menunggu'] = $this->Dashboard_model->JumlahBerkasMenunggu();
        $data['proses'] = $this->Dashboard_model->JumlahBerkasProses();
        $data['selesai']  = $this->Dashboard_model->JumlahBerkasSelesai();
        $data['terima']       = $this->Dashboard_model->JumlahBerkasTerima();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('dekan/index', $data);
        $this->load->view('templates/admin/footer');
    }
}
