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

			if ($role[0]["status"] == "terverifikasi") {
				if ($role[0]["role"] == "admin") {
					$data_session = array(
						'nama' => $username,
						'status' => "login admin"
					);

					$this->session->set_userdata($data_session);

					redirect(base_url('admin/dashboard'));
				} elseif ($role[0]["role"] == "perusahaan") {

					$data_session = array(
						'nama' => $username,
						'status' => "login perusahaan"
					);

					$this->session->set_userdata($data_session);

					redirect(base_url('panel_perusahaan/dashboard'));
				} elseif ($role[0]["role"] == "organisasi") {

					$data_session = array(
						'nama' => $username,
						'status' => "login organisasi"
					);

					$this->session->set_userdata($data_session);

					redirect(base_url('panel_organisasi/dashboard'));
				}
			} elseif ($role[0]["status"] == "belum terverifikasi") {
				$data['error_login'] = "Akun belum diverifikasi oleh admin, silakan tunggu 2 x 24 jam.";
				$this->load->view('login', $data);
			} else {

			}

		} else {
			$data['error_login'] = "Username atau password salah.";
			$this->load->view('login', $data);
		}
	}
}
?>
