<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class FormModel extends CI_Model
{
	function cek_mhs($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function upload()
	{
		$config['upload_path'] = './dokumen/ijazah';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = '1024';
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('berkas')) {
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function upload2()
	{
		$config['upload_path'] = './dokumen/transkip';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = '1024';
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('berkas2')) {
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function upload_bukti()
	{
		$config['upload_path'] = './dokumen/bukti_bayar';
		$config['allowed_types'] = 'png|jpg|jpeg';
		$config['max_size'] = '1024';
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('berkas')) {
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function simpan_data($upload, $upload2, $coba, $nim, $nama)
	{
		//Data Berkas
		$quantity = $this->input->post('quantityIjazah');
		$quantity2 = $this->input->post('quantityTranskip');
		$qty = (int)$quantity;
		$qty2 = (int)$quantity2;
		$Total = ((($qty + $qty2) * 10000) + 5000);
		$status = 0;
		$upload = $upload['file']['file_name'];
		$upload2 = $upload2['file']['file_name'];
		$data_reservasi = [
			'NIM' => $nim,
			'Nama' => $nama,
			'upload_ijazah' => $upload,
			'upload_transkip' => $upload2,
			'Jumlah_ijazah' => $qty,
			'Jumlah_transkip' => $qty2,
			'Total' => $Total,
			'StatusReservasi' => $status
		];

		// Data Alumni
		$email	= $this->input->post('email');
		$telp	= $this->input->post('phone');
		$alamat	= $this->input->post('alamatLengkap');
		$tempatBekerja	= $this->input->post('tempatBekerja');
		$posisiBekerja	= $this->input->post('posisiBekerja');
		$alamatPerusahaan	= $this->input->post('alamatPerusahaan');
		$data_alumni = [
			'email' => $email,
			'telepon' => $telp,
			'alamat' => $alamat,
			'NIM' => $nim,
			'tempatBekerja' => $tempatBekerja,
			'posisiBekerja' => $posisiBekerja,
			'alamatPerusahaan' => $alamatPerusahaan
		];

		// Data pertanyaan multiple choice
		foreach ($coba as $ask) {
			$multipleChoice = $ask->question;
			$answerMultipleChoice = $this->input->post($ask->name);
			$data_multipleChoice = [
				'question' => $multipleChoice,
				'answer' => $answerMultipleChoice
			];
			$this->db->insert('kuisioner', $data_multipleChoice);
		}

		// Data pertanyaan 1
		$question1 = "Menurut anda, aspek apa dari perkulihan di FASILKOM yang paling bermanfaat atau penting?";
		$answer1 = $this->input->post("menurutanda");
		$data_question1 = [
			'question' => $question1,
			'answer' => $answer1
		];

		// Data pertanyaan 2
		$question2 = "Apa saran Anda untuk menyempurnakan kualitas pembelajaran FASILKOM ?";
		$answer2 = $this->input->post("sarananda");
		$data_question2 = [
			'question' => $question2,
			'answer' => $answer2
		];
		$this->db->insert('kuisioner', $data_question1);
		$this->db->insert('kuisioner', $data_question2);
		$this->db->insert('reservasi', $data_reservasi);
		$this->db->insert('data_alumni', $data_alumni);
	}

	public function ambil_question()
	{
		$query = $this->db->get('coba_question');
		return $query->result();
	}

	public function ambil_order($nim)
	{
		$where = array(
			'NIM' => $nim
		);
		$query = $this->db->get_where("reservasi", $where);
		return $query->result_array();
	}
	public function pembayaran($ID_Reservasi)
	{
		$where = array(
			'ID_Reservasi' => $ID_Reservasi
		);
		$query = $this->db->get_where("reservasi", $where);
		return $query->result();
	}

	public function bukti_pembayaran($Total, $upload, $ID_Reservasi)
	{
		$Image = $upload['file']['file_name'];
		$StatusBayar = 1;
		$StatusKonfirmasi = 0;
		$date = $this->input->post('tanggal');
		$ID_Reservasi = $this->input->post('ID_Reservasi');
		$rekening = $this->input->post('rekening');
		$name	= $this->input->post('name');
		$bank	= $this->input->post('bank');

		$data = [
			'Image' => $Image,
			'StatusKonfirmasi' => $StatusKonfirmasi,
			'PaidAmount' => $Total,
			'PaidBy' => $name,
			'Rekening' => $rekening,
			'Date' => date('Y-m-d H:i:s'),
			'ID_Reservasi' => $ID_Reservasi,
			'Bank' => $bank
		];
		$data2 = [
			'StatusBayar' => $StatusBayar
		];
		$this->db->insert('pembayaran', $data);
		$this->db->insert('reservasi', $data2);
	}

	public function redirectBelumBayar($nim)
	{
		$where = array(
			'NIM' => $nim,
			'StatusBayar' => 0
		);
		$query = $this->db->get_where("reservasi", $where);
		return $query->result_array();
	}

	public function redirectSudahBayar($nim)
	{
		$where = array(
			'NIM' => $nim,
			'StatusBayar' => 1
		);
		$query = $this->db->get_where("reservasi", $where);
		return $query->result_array();
	}
}
