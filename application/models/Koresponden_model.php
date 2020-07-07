<?php

class Koresponden_model extends CI_Model
{
    public function getAllMenuQuestion()
    {
        return $this->db->get('coba_question')->result_array();
    }


    public function tambahDataQuestion()
    {
        $data = [
            "question" => $this->input->post('question', true)
        ];
        $this->db->insert('coba_question', $data);
    }

    public function hapusDataQuestion($id)
    {
        //  $this->db->where('nim', $nim);
        $this->db->delete('coba_question', ['id' => $id]);
    }

    public function getQuestionById($id)
    {
        return $this->db->get_where('coba_question', ['id' => $id])->row_array();
    }

    public function editDataQuestion($id)
    {
        $data = [
            "question" => $this->input->post('question', true)
        ];
        $this->db->where('id', $id);
        $this->db->update('coba_question', $data);
    }

    // Baris awal Answer
    public function getAllMenuAnswer()
    {
        return $this->db->get('kuisioner')->result_array();
    }
}
