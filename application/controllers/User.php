<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('FormModel');
        $this->load->model('Legalisir_model');
        $this->load->model('Pembayaran_model');
        $this->load->library('CallAPI');
    }
    public function index()
    {
        // $data['user'] = $this->db->get_where('users', [
        //     'username' => $this->session->userdata('username')
        // ])->row_array();

        // echo 'Selamat datang ' . $data['user']['fullname'];

        $data['title'] = 'User Page';
        $this->load->view('templates/users/users_header', $data);
        $this->load->view('users/home');
        $this->load->view('templates/users/users_footer');
    }

    public function cek_mhs()
    {
        $data['title'] = 'Validasi NIM';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('users/validasiNim', $data);
        $this->load->view('templates/admin/footer');

        if (isset($_POST['submit'])) {
            $nim = $this->input->post('nim');
            $name = strtolower($this->input->post('nama'));
            $result = $this->callapi->getFinalProject($nim);
            $status = $result['status'] == 1 ? "lulus" : "belum lulus";
            // $where = array(
            //     'NIM' => $nim,
            //     'Status' => $status
            // );
            // $cek = $this->FormModel->cek_mhs("alumni", $where)->num_rows();
            if ($status == "lulus" && strtolower($result['nama']) == $name) {
                $this->session->set_userdata('nim', $nim);

                /* ini ambil orderan? */
                $query = $this->FormModel->ambil_order($nim);
                $dquery = end($query);
                if (!$dquery) {
                    redirect('User/formlegalisir/' . base64_encode($nim) . '/' . base64_encode($result['nama']));
                } elseif ($dquery['StatusBayar'] != '1') {
                    // var_dump('<pre>', end($query));
                    // die;
                    /* ini kalo belum bayar di redirect ke order  */
                    redirect('User/order/' . base64_encode($nim));
                } elseif ($dquery['StatusBayar'] == '1') {
                    echo "Tidak dapat legalisir sebelum diselesaikan";
                }
            } elseif (strtolower($result['nama']) != $name && $result['nim'] != $nim) {
                $this->session->set_flashdata('both', 'Maaf data yang anda masukkan tidak ada');
                redirect('User/cek_mhs');
            } elseif (strtolower($result['nama']) != $name) {
                $this->session->set_flashdata('nama', 'Nama yang anda masukkan salah');
                redirect('User/cek_mhs');
            } else {
                $this->session->set_flashdata('gagal', 'Maaf anda belum berhak membuat legalisir');
                redirect('User/cek_mhs');
            }
        }
    }

    public function formLegalisir($nim, $nama)
    {
        /* if (preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $nim)) {
            var_dump('encoded', $nim);
        } else {
            var_dump('non encoded');
        } */
        if ((!is_numeric($nim)) && !is_numeric($nama)) {
            $data['title'] = 'Form Legalisir';
            $data['nim'] = base64_decode($nim);
            $data['nama'] = base64_decode($nama);
            $result['question'] = $this->FormModel->ambil_question(base64_decode($nim));

            $this->load->view('templates/users/wizard_header', $data);
            $this->load->view('users/form_legalisir', $result, $data);
            $this->load->view('templates/users/wizard_footer');
        } else {
            redirect('user/blocked');
        }
    }

    public function tambah($nim, $nama)
    {
        $nim = base64_decode($nim);
        $nama = base64_decode($nama);
        $data = array();
        $upload = $this->FormModel->upload();
        $upload2 = $this->FormModel->upload2();
        if (($upload['result'] == "success") || ($upload2['result'] == "success")) {
            $coba = $this->FormModel->ambil_question();
            $this->FormModel->simpan_data($upload, $upload2, $coba, $nim, $nama);
        }
        redirect('legalisir/pengesahanToBayar/' . base64_encode($nim));
    }

    public function bukti_bayar($ID_Reservasi)
    {
        // $ID_Reservasi = $this->input->post('ID_Reservasi');
        // var_dump($ID_Reservasi);
        // die;
        $ID_Reservasi = base64_decode($ID_Reservasi);
        $data = array();
        $upload = $this->FormModel->upload_bukti();
        $result['data'] = $this->FormModel->pembayaran($ID_Reservasi);
        $Total = 0;
        foreach ($result['data'] as $data) {
            $Total = $data->Total;
        }
        if ($upload['result'] == "success") {
            $this->FormModel->bukti_pembayaran($Total, $upload, $ID_Reservasi);
            $this->Pembayaran_model->updateToBayar($ID_Reservasi);
        }
        redirect('User/index/');
    }

    public function order($nim)
    {
        $nim = base64_decode($nim);
        $result['data'] = $this->FormModel->ambil_order($nim);
        $result['output'] = $this->callapi->getFinalProject($nim);
        $this->load->view('users/order_page', $result);
    }

    public function invoice($nim)
    {
        $result['data'] = $this->FormModel->ambil_order($nim);
        $this->load->view('users/invoice', $result);
    }

    public function pembayaran($ID_Reservasi)
    {
        $ID_Reservasi = base64_decode($ID_Reservasi);
        $result['data'] = $this->FormModel->pembayaran($ID_Reservasi);
        $this->load->view('users/form_pembayaran', $result, $ID_Reservasi);
    }

    public function ceklegalisir($nim)
    {
        $data['title'] = 'Proses Pengajuan';
        $nim = base64_decode($nim);
        $data['proses'] = $this->FormModel->ambil_order($nim);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('users/ceklegalisir_view', $data);
        $this->load->view('templates/admin/footer');
    }

    public function cek_pengorder()
    {
        $data['title'] = 'Validasi NIM';

        $this->load->view('templates/admin/header', $data);
        $this->load->view('users/validasiPengorder', $data);
        $this->load->view('templates/admin/footer');


        // if (isset($_POST['submit'])) {
        //     $nim = $this->input->post('nim');
        //     $name = strtolower($this->input->post('nama'));
        //     $result = $this->callapi->getFinalProject($nim);
        //     $status = $result['status'] == 1 ? "lulus" : "belum lulus";

        //     /* ini ambil orderan? */
        //     $query = $this->FormModel->ambil_order($nim);
        //     $dquery = end($query);
        //     if ($dquery['StatusBayar'] != '1') {
        //         redirect('User/order/' . base64_encode($nim));
        //     } else {
        //         redirect('User/ceklegalisir/' . base64_encode($nim));
        //     }

        // }
        if (isset($_POST['submit'])) {
            $nim = $this->input->post('nim');
            $name = strtolower($this->input->post('nama'));
            $result = $this->callapi->getFinalProject($nim);
            $status = $result['status'] == 1 ? "lulus" : "belum lulus";

            if ($status == "lulus" && strtolower($result['nama']) == $name) {
                $this->session->set_userdata('nim', $nim);

                /* ini ambil orderan? */
                $query = $this->FormModel->ambil_order($nim);
                $dquery = end($query);
                if (!$dquery) {
                    $this->session->set_flashdata('both', 'Maaf data yang anda masukkan tidak ada');
                    redirect('User/cek_pengorder');
                } elseif ($dquery['StatusBayar'] != '1') {
                    // var_dump('<pre>', end($query));
                    // die;
                    /* ini kalo belum bayar di redirect ke order  */
                    redirect('User/order/' . base64_encode($nim));
                } elseif ($dquery['StatusBayar'] == '1') {
                    redirect('User/ceklegalisir/' . base64_encode($nim));
                }
            } elseif (strtolower($result['nama']) != $name && $result['nim'] != $nim) {
                $this->session->set_flashdata('both', 'Maaf data yang anda masukkan tidak ada');
                redirect('User/cek_pengorder');
            } elseif (strtolower($result['nama']) != $name) {
                $this->session->set_flashdata('nama', 'Nama yang anda masukkan salah');
                redirect('User/cek_pengorder');
            } else {
                $this->session->set_flashdata('gagal', 'Maaf anda belum berhak membuat legalisir');
                redirect('User/cek_pengorder');
            }
        }
    }

    public function blocked()
    {

        $data['title'] = 'Access Blocked';
        $this->load->view('templates/admin/auth_header', $data);
        $this->load->view('users/blocked');
        $this->load->view('templates/admin/auth_footer');
    }

    public function sendemail()
    {
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

        $isi = "tessssSSSSSSSSSS";

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('elegalisirmercubuana@gmail.com', 'E-legalisir Mercu Buana');
        $this->email->to('maulanaishim@gmail.com');
        $this->email->subject('Testing lagi');
        $this->email->message($isi);

        if ($this->email->send()) {
            echo "berhasil";
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
