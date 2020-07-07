<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
        $this->load->model('Dashboard_model');

        is_logged_in();
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        // echo 'Selamat datang ' . $data['user']['fullname'];

        $data['title'] = 'Pembayaran || Menunggu Konfirmasi';
        $data['jumlah'] = $this->Dashboard_model->JumlahBerkasMenunggu();
        $jumlah = $data['jumlah'];
        $data['aksi'] = $this->Pembayaran_model->getAllMenuAksi();
        $data['pembayaran'] = $this->Pembayaran_model->getAllMenu($jumlah);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/pembayaran/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function belumBayar()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        // echo 'Selamat datang ' . $data['user']['fullname'];

        $data['title'] = 'Pembayaran || Belum Bayar';
        $data['pembayaran'] = $this->Pembayaran_model->getBelumBayar();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/pembayaran/belumBayar', $data);
        $this->load->view('templates/admin/footer');
    }
}
