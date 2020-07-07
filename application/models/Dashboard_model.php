<?php

class Dashboard_model extends CI_Model
{

    public function JumlahBerkasMenunggu()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('reservasi', 'reservasi.ID_Reservasi=pembayaran.ID_Reservasi');
        $this->db->where('StatusKonfirmasi', '0');
        $this->db->where('StatusBayar', '1');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function JumlahBerkasBelumBayar()
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('StatusBayar', '0');
        $this->db->where('StatusReservasi', '0');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function JumlahBerkasProses()
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('StatusReservasi', '1');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function JumlahBerkasSelesai()
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('StatusReservasi', '2');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function JumlahBerkasTerima()
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('StatusReservasi', '3');
        $query = $this->db->get();
        return $query->num_rows();
    }
}
