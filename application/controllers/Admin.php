<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Dashboard_model');
        $this->load->model('Pembayaran_model');
        $this->load->model('Legalisir_model');
        $this->load->model('Report_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        // echo 'Selamat datang ' . $data['user']['fullname'];

        $data['title'] = 'Dashboard';

        $data['belumBayar'] = $this->Dashboard_model->JumlahBerkasBelumBayar();
        $data['menunggu'] = $this->Dashboard_model->JumlahBerkasMenunggu();
        $data['proses'] = $this->Dashboard_model->JumlahBerkasProses();
        $data['selesai']  = $this->Dashboard_model->JumlahBerkasSelesai();
        $data['terima']       = $this->Dashboard_model->JumlahBerkasTerima();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function report()
    {
        $data['title'] = 'Report';
        $data['user'] = $this->db->get_where('users', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/report/report', $data);
        $this->load->view('templates/admin/footer');
    }


    public function reportchart()
    {
        $startdate = date('Y-m-d', strtotime($this->input->post('startdate')));
        $enddate = date('Y-m-d', strtotime($this->input->post('enddate')));

        if ($startdate <= $enddate) {
            //tanggal startdate and enddate
            $data['startdate']   = $startdate;
            $data['enddate']  = $enddate;

            // Jumlah Surat Kerja Praktek
            $data['kpwaiting'] = $this->report_model->ReportJumlahSuratKpWaiting($startdate, $enddate);
            $data['kpproses']  = $this->report_model->ReportJumlahSuratKpProses($startdate, $enddate);
            $data['kpfinish']  = $this->report_model->ReportJumlahSuratKpFinish($startdate, $enddate);
            $data['kptake']    = $this->report_model->ReportJumlahSuratKpTake($startdate, $enddate);
            $data['kptolak']   = $this->report_model->ReportJumlahSuratKpTolak($startdate, $enddate);

            // Data nama mahasiswa
            $data['suratwaiting'] = $this->report_model->SuratWaiting($startdate, $enddate);
            $data['suratproses']  = $this->report_model->SuratProses($startdate, $enddate);
            $data['suratfinish']  = $this->report_model->SuratFinish($startdate, $enddate);
            $data['surattake']    = $this->report_model->SuratTake($startdate, $enddate);
            $data['surattolak']    = $this->report_model->SuratTolak($startdate, $enddate);

            $this->load->view('admin/headerChart', $data);
            $this->load->view('admin/chartjs_v', $data);
        } else {
            $this->session->set_flasdata('gagal_tanggal', 'true');
            redirect('admin/takekp');
        }
    }

    public function printReport(){
        $data['title'] = 'Cetak Laporan';
        if(!isset($_POST['dari_tgl'])){
            $dari_tgl = '00-00-0000 00:00:00';
            $sampai_tgl = '00-00-0000 00:00:00';
        }else{
            $dari_tgl = $_POST['dari_tgl'];
            $sampai_tgl = $_POST['sampai_tgl'];
        }
        $data['cetak'] = $this->Report_model->printLAPORAN($dari_tgl, $sampai_tgl);
        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/report/cetakLaporan', $data);
    }
}
