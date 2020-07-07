<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->library('form_validation');
	// }

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');


		if ($this->form_validation->run() == false) {

			$data['title'] = 'Login Page';
			$this->load->view('templates/admin/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/admin/auth_footer');
		} else {
			$this->_login();
		}
	}

	public function _alert($ket)
	{
		if ($ket == 'wrong') {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show ml-5 mr-4" role="alert">
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true"> ×</span>
			</button>Username or password  is incorrect!</div>');
			redirect('auth');
		} else if ($ket == 'not validation') {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show ml-5 mr-4" role="alert">
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true"> ×</span>
			</button>Username has not been activated!</div>');
			redirect('auth');
		} else if ($ket == 'created') {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show ml-5 mr-4" role="alert">
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true"> ×</span>
			</button>
			<strong>Congratulations! </strong>Your account has been created. Please Login</div>');
			redirect('auth');
		} else if ($ket == 'logout') {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show ml-5 mr-4" role="alert">
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true"> ×</span>
			</button>You have been logged out!</div>');
			redirect('auth');
		}
	}

	private function _login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$user = $this->db->get_where('users', [
			'username' => $username
		])->row_array();

		//Jika user ada
		if ($user) {
			//Jika user aktif
			if ($user['is_active'] == 1) {
				//Cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin');
					} else {
						redirect('dekan');
					}
				} else {
					$this->_alert('wrong');
				}
			} else {
				$this->_alert('not validation');
			}
		} else {
			$this->_alert('wrong');
		}
	}

	public function registration()
	{

		$this->form_validation->set_rules('fullname', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]', [
			'is_unique' => 'Username has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]|min_length[8]', [
			'matches' => 'Password not match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]|min_length[8]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registration Page';
			$this->load->view('templates/admin/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/admin/auth_footer');
		} else {
			$data = [
				'fullname' => htmlspecialchars($this->input->post('fullname', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1
			];
			$this->db->insert('users', $data);
			$this->_alert('created');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		$this->_alert('logout');
	}

	public function blocked()
	{
		if (!$this->session->userdata('username')) {
			redirect('user');
		}

		$data['title'] = 'Access Blocked';
		$this->load->view('templates/admin/auth_header', $data);
		$this->load->view('auth/blocked');
		$this->load->view('templates/admin/auth_footer');
	}
}
