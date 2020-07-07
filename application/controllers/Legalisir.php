<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Legalisir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Legalisir_model');


        // echo 'Selamat datang ' . $data['user']['fullname'];


    }

    // public function index()
    // {
    //     $data['user'] = $this->db->get_where('users', [
    //         'username' => $this->session->userdata('username')
    //     ])->row_array();

    //     // echo 'Selamat datang ' . $data['user']['fullname'];

    //     $data['title'] = 'Dashboard';
    //     $this->load->view('templates/admin/header', $data);
    //     $this->load->view('templates/admin/sidebar', $data);
    //     $this->load->view('admin/index', $data);
    //     $this->load->view('templates/admin/footer');
    // }
    public function pengesahanToBayar($nim)
    {
        $nim = base64_decode($nim);
        $data = $this->Legalisir_model->getEmailbyNim($nim);
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'elegalisirmercubuana@gmail.com',
            'smtp_pass' => 'Yudha1993',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $isi    = "<p>Halo , </p>

        Segera lakukan pembayaran agar berkas legalisir ijazah anda kami proses, pastikan anda selalu mendapatkan status notifikasi mengenai berkas legalisir ijazah anda
        <br>
        <br>
        <br>
        Salam TU Fasilkom";

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('elegalisirmercubuana@gmail.com', 'E-legalisir Mercu Buana');
        $this->email->to($data['email']);
        $this->email->subject("[E-legalisir - NOREPLY] Harap segera melakukan pembayaran!");
        $this->email->message($isi);

        if ($this->email->send()) {
            redirect('User/order/' . base64_encode($nim));
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }


    public function pengesahanToProses($id = '', $proses)
    {
        $this->Legalisir_model->updatePengesahan($id, 1, $proses);
        $data = $this->Legalisir_model->getEmail($proses);
        $this->session->set_flashdata('flash', 'Diproses!');

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'elegalisirmercubuana@gmail.com',
            'smtp_pass' => 'Yudha1993',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $isi    = "<p>Halo , </p>

        Status berkas legalisir ijazah anda sedang kami proses, pastikan anda selalu mendapatkan status notifikasi mengenai berkas legalisir ijazah anda
        <br>
        <br>
        <br>
        Salam TU Fasilkom";

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('elegalisirmercubuana@gmail.com', 'E-legalisir Mercu Buana');
        $this->email->to($data['email']);
        $this->email->subject("[E-legalisir - NOREPLY] Berkas Legalisir Ijazah Diproses");
        $this->email->message($isi);

        if ($this->email->send()) {
            redirect('pembayaran');
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function pengesahanToSelesai($selesai)
    {
        $this->Legalisir_model->updatePengesahanToSelesai($selesai);
        $data = $this->Legalisir_model->getEmail($selesai);
        $this->session->set_flashdata('flash', 'Selesai dilegalisir!');

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'elegalisirmercubuana@gmail.com',
            'smtp_pass' => 'Yudha1993',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $isi    = "<p>Halo , </p>

        Status berkas legalisir ijazah anda selesai, silahkan untuk datang ke TU Fasilkom untuk mengambil berkas legalisir ijazah
        <br>
        <br>
        <br>
        Salam TU Fasilkom";

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('elegalisirmercubuana@gmail.com', 'E-legalisir Mercu Buana');
        $this->email->to($data['email']);
        $this->email->subject("[E-legalisir - NOREPLY] Berkas Legalisir Ijazah Selesai");
        $this->email->message($isi);

        if ($this->email->send()) {
            redirect('legalisir/proses');
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function pengesahanToTerima($terima)
    {
        $this->Legalisir_model->updatePengesahanToTerima($terima);
        $data = $this->Legalisir_model->getEmail($terima);
        $this->session->set_flashdata('flash', 'Telah diterima!');

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'elegalisirmercubuana@gmail.com',
            'smtp_pass' => 'Yudha1993',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $isi    = "<p>Halo , </p>

        Terimakasih telah menggunakan layanan E-legalisir, sukses :) <br>
        <br>
        <br>
        Salam TU Fasilkom";

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('elegalisirmercubuana@gmail.com', 'E-legalisir Mercu Buana');
        $this->email->to($data['email']);
        $this->email->subject("[E-legalisir - NOREPLY] Berkas Legalisir Ijazah Diterima");
        $this->email->message($isi);

        if ($this->email->send()) {
            redirect('legalisir/selesai');
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function proses()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        $data['title'] = 'Proses Pengajuan';
        $data['proses'] = $this->Legalisir_model->getProses();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/legalisir/proses', $data);
        $this->load->view('templates/admin/footer');
    }

    public function selesai()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        $data['title'] = 'Selesai Pengajuan';
        $data['proses'] = $this->Legalisir_model->getSelesai();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/legalisir/selesai', $data);
        $this->load->view('templates/admin/footer');
    }

    public function terima()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        $data['title'] = 'Sudah Diambil';
        $data['proses'] = $this->Legalisir_model->getTerima();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/legalisir/terima', $data);
        $this->load->view('templates/admin/footer');
    }
}
