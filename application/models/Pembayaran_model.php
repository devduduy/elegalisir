<?php

class Pembayaran_model extends CI_Model
{
    public function getAllMenuAksi()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('reservasi', 'reservasi.ID_Reservasi=pembayaran.ID_Reservasi');
        $this->db->where('StatusKonfirmasi', '0');
        $this->db->where('StatusBayar', '1');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllMenu($jumlah)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('reservasi', 'reservasi.ID_Reservasi=pembayaran.ID_Reservasi');
        $this->db->where('StatusKonfirmasi', '0');
        $this->db->where('StatusBayar', '1');
        $this->db->limit($jumlah, 1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getBelumBayar()
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('StatusBayar', '0');
        $this->db->where('StatusReservasi', '0');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function updateToBayar($ID_Reservasi)
    {
        $data = array(
            'StatusBayar' => '1'
        );

        $this->db->where('ID_Reservasi', $ID_Reservasi);
        return $this->db->update('reservasi', $data);
    }

    public function tambahDataMenu()
    {
        $data = [
            "menu" => $this->input->post('menu', true)
        ];
        $this->db->insert('user_menu', $data);
    }

    public function hapusDataMenu($id)
    {
        //  $this->db->where('nim', $nim);
        $this->db->delete('user_menu', ['id' => $id]);
    }

    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function editDataMenu()
    {
        $data = [
            "menu" => $this->input->post('menu', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                      ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function tambahDataSubMenu()
    {
        $data = [
            "title" => $this->input->post('title', true),
            "menu_id" => $this->input->post('menu_id', true),
            "url" => $this->input->post('url', true),
            "icon" => $this->input->post('icon', true),
            "is_active" => $this->input->post('is_active', true)
        ];
        $this->db->insert('user_sub_menu', $data);
    }

    public function hapusDataSubMenu($id)
    {
        //  $this->db->where('nim', $nim);
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }
}
