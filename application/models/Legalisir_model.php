<?php

class Legalisir_model extends CI_Model
{
    public function updatePengesahan($id, $val = 0, $id_reservasi)
    {
        $query = "UPDATE pembayaran SET StatusKonfirmasi = ? WHERE ID_Payment = ? ";
        $result = $this->db->query($query, array($val, $id));

        $query2 = "UPDATE reservasi SET StatusReservasi = ?  WHERE ID_Reservasi = ?";
        $this->db->query($query2, array(1, $id_reservasi));
    }

    public function updatePengesahanToProses($id_reservasi)
    {

        $query2 = "UPDATE reservasi SET StatusReservasi = ?  WHERE ID_Reservasi = ?";
        $this->db->query($query2, array(1, $id_reservasi));
    }

    public function updatePengesahanToSelesai($id_reservasi)
    {

        // $query2 = "UPDATE reservasi SET StatusReservasi = ?  WHERE ID_Reservasi = ?";
        // $this->db->query($query2, array(2, $id_reservasi));
        $data = array(
            'StatusReservasi' => '2',
            'Tgl_Selesai' => date('Y-m-d H:i:s')
        );

        $this->db->where('ID_Reservasi', $id_reservasi);
        return $this->db->update('reservasi', $data);
    }

    public function updatePengesahanToTerima($id_reservasi)
    {

        $data = array(
            'StatusReservasi' => '3',
            'Tgl_Diambil' => date('Y-m-d H:i:s')
        );

        $this->db->where('ID_Reservasi', $id_reservasi);
        return $this->db->update('reservasi', $data);
    }

    public function getProses()
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('reservasi.StatusReservasi', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getSelesai()
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('reservasi.StatusReservasi', 2);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTerima()
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('reservasi.StatusReservasi', 3);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function detailReservasi($ID_Reservasi)
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('ID_Reservasi', $ID_Reservasi);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getEmail($ID_Reservasi)
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->join('data_alumni', 'data_alumni.NIM=reservasi.NIM', 'left');
        $this->db->where('ID_Reservasi', $ID_Reservasi);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getEmailbyNim($nim)
    {
        $this->db->select('*');
        $this->db->from('data_alumni');
        $this->db->where('NIM', $nim);
        $query = $this->db->get();
        return $query->row_array();
    }
}
