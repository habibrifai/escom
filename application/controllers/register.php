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

		$config = array(
			'upload_path' => 'assets/gambar/',
			'allowed_types' => 'gif|jpg|png|pdf',
						'max_size' => 150000, //in kb
						'max_width' => 200000,
						'max_height'=> 200000
					);

		$fileUpload = array();
		$this->upload->initialize($config);

		if($this->form_validation->run() == FALSE){
			$this->load->view('register');
		}
		else{
			$data = array(
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'role' => $this->input->post('role'),
				'status' => "belum terverifikasi",
			);
			$cek = $this->m_register->cek_regist($data);
			if($cek == false){
				$data = array(
					'error_regist' => 'Username or Email Already Registered');
				$this->load->view('register', $data);
			}
			else{
				if($this->upload->do_upload('foto')){
					$fileUpload = $this->upload->data();
					$foto = $fileUpload['file_name'];
					$datauser = array(
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'role' => $this->input->post('role'),
						'status' => "belum terverifikasi"
					);
					if($data['role']=='perusahaan'){
						$dataclient = array(
							'nama_perusahaan' => $this->input->post('nama'),
							'tahun_berdiri' => $this->input->post('tahun'),
							'alamat_perusahaan' => $this->input->post('alamat'),
							'no_tlp' => $this->input->post('notelp'),
							'foto' => $foto
						);
						$this->m_register->registration($datauser, $dataclient);
					}
					elseif($data['role']=='organisasi'){
						$dataclient = array(
							'nama_organisasi' => $this->input->post('nama'),
							'tahun_berdiri' => $this->input->post('tahun'),
							'alamat_organisasi' => $this->input->post('alamat'),
							'no_tlp' => $this->input->post('notelp'),
							'foto' => $foto
						);
						$this->m_register->registration($datauser, $dataclient);
					}
					// $this->load->view('login');
					redirect(base_url('login'));
				}
				$data['error_regist'] = "Periksa kembali inputan anda.";
				$this->load->view('register', $data);
			}
		}
	}
}
?>
