<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report_model extends CI_Model
{

    public function printLAPORAN($startdate, $enddate)
    {
        $query = $this->db->query(
            "SELECT * 
			 FROM reservasi WHERE Tgl_Transaksi 
			 BETWEEN '$startdate 00:00:00' AND '$enddate 00:00:00'"
        );

        return $query->result_array();
    }

    public function printLAPORANkp($startdate, $finishdate, $jurusan)
    {
        $query = $this->db->query(
            "SELECT surat.no_surat,surat.alamat_perusahaan,surat.nim,surat.nama_perusahaan,surat.tanggal_diambil,user.nama_mahasiswa 
			 FROM surat INNER JOIN user ON surat.nim=user.nim
			 WHERE surat.tanggal_diambil 
			 BETWEEN '$startdate' AND '$finishdate' 
			 AND surat.jenis_surat='Kerja Praktek' 
			 AND surat.prodi='$jurusan'"
        );

        return $query->result_array();
    }

    public function ReportJumlahBerkasWaiting($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->where('StatusBayar', '0');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function ReportJumlahBerkasProses($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('StatusReservasi', '1');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function ReportJumlahBerkasFinish($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('StatusReservasi', '2');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function ReportJumlahBerkasTake($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('StatusReservasi', '3');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function ReportJumlahBerkasTolak($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Di Tolak');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaSIKpWaiting($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Menunggu');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Sistem Informasi');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaSIKpProses($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Proses');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Sistem Informasi');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaSIKpFinish($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Selesai');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Sistem Informasi');
        $this->db->where('tanggal_selesai >=', $startdate);
        $this->db->where('tanggal_selesai <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaSIKpTake($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Ambil');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Sistem Informasi');
        $this->db->where('tanggal_diambil >=', $startdate);
        $this->db->where('tanggal_diambil <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaSIKpTolak($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Di Tolak');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Sistem Informasi');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaTIKpWaiting($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Menunggu');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Teknik Informatika');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaTIKpProses($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Proses');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Teknik Informatika');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaTIKpFinish($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Selesai');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Teknik Informatika');
        $this->db->where('tanggal_selesai >=', $startdate);
        $this->db->where('tanggal_selesai <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaTIKpTake($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Ambil');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Teknik Informatika');
        $this->db->where('tanggal_diambil >=', $startdate);
        $this->db->where('tanggal_diambil <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function MahasiswaTIKpTolak($startdate, $enddate)
    {
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->where('status', 'Di Tolak');
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $this->db->where('prodi', 'Teknik Informatika');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function SuratWaiting($startdate, $enddate)
    {
        $this->db->select("*");
        $this->db->from('surat');
        $this->db->join('user', 'user.nim=surat.nim');
        $this->db->where('surat.status', 'Menunggu');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $query = $this->db->get();

        return $query->result_array();
    }


    public function SuratProses($startdate, $enddate)
    {
        $this->db->select("*");
        $this->db->from('surat');
        $this->db->join('user', 'user.nim=surat.nim');
        $this->db->where('surat.status', 'Proses');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function SuratFinish($startdate, $enddate)
    {
        $this->db->select("*");
        $this->db->from('surat');
        $this->db->join('user', 'user.nim=surat.nim');
        $this->db->where('surat.status', 'Selesai');
        $this->db->where('tanggal_selesai >=', $startdate);
        $this->db->where('tanggal_selesai <=', $enddate);
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function SuratTake($startdate, $enddate)
    {
        $this->db->select("*");
        $this->db->from('surat');
        $this->db->join('user', 'user.nim=surat.nim');
        $this->db->where('surat.status', 'Ambil');
        $this->db->where('tanggal_diambil >=', $startdate);
        $this->db->where('tanggal_diambil <=', $enddate);
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function SuratTolak($startdate, $enddate)
    {
        $this->db->select("*");
        $this->db->from('surat');
        $this->db->join('user', 'user.nim=surat.nim');
        $this->db->where('surat.status', 'Di Tolak');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function SuratMahasiswaTI($startdate, $enddate)
    {
        $this->db->select("*");
        $this->db->from('surat');
        $this->db->join('user', 'user.nim=surat.nim');
        $this->db->where('surat.prodi', 'Teknik Informatika');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function SuratMahasiswaSI($startdate, $enddate)
    {
        $this->db->select("*");
        $this->db->from('surat');
        $this->db->join('user', 'user.nim=surat.nim');
        $this->db->where('surat.prodi', 'Sistem Informasi');
        $this->db->where('tanggal_diajukan >=', $startdate);
        $this->db->where('tanggal_diajukan <=', $enddate);
        $this->db->where('jenis_surat', 'Kerja Praktek');
        $query = $this->db->get();

        return $query->result_array();
    }
}

/* End of file Report_model.php */
/* Location: ./application/models/Report_model.php */
