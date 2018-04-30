<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}
	
	public function index(){
		$this->load->view('login');
	}

	public function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		$role = $this->m_login->cek_role("user",$where);
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			if ($role[0]["role"] == "admin") {
				echo "halaman admin";
			} elseif ($role[0]["role"] == "perusahaan") {
				echo "halaman perusahaan";
			} elseif ($role[0]["role"] == "organisasi") {
				echo "halaman organisasi";
			}

		} else {
			echo "Username dan password salah !";
		}
	}
}
?>