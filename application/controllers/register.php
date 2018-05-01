<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
        parent::__construct();
				$this->load->library('session');
				$this->load->model('m_register');
				$this->load->library('form_validation');
				$this->load->helper('security');
    }

	public function index(){
		$this->load->view('register');
	}

	function do_regist(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('role', 'Role', 'trim|required');

		if($this->form_validation->run() == FALSE){
				$this->load->view('register');
			}
		else{
				$data = array(
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'role' => $this->input->post('role'),
				);
				$cek = $this->m_register->cek_regist($data);
					if($cek == false){
						$data = array(
							'error_regist' => 'Username or Email Already Registered');
						$this->load->view('register', $data);
						}
					else{
						$this->m_register->registration($data);
						$data_session = array(
							'nama' => $data['username'],
							'status' => "login"
						);
						$this->session->set_userdata($data_session);
						if ($data["role"] == "perusahaan") {
							echo "halaman perusahaan";
						}
						elseif ($data["role"] == "organisasi") {
							echo "halaman organisasi";
						}
			}
		}
	}
}
?>
