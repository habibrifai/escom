<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_ctrlPerusahaan');
		$this->load->model('m_organisasi');
		$this->username = $this->session->userdata('nama');
	}

	public function index(){

		$this->load->view('perusahaan/dashboard');
	}

	public function list_spj(){
		$this->load->view('perusahaan/list_spj');
	}

	public function edit_profil(){

			$this->form_validation->set_rules('nama', 'Nama Perusahaan', 'required');
			$this->form_validation->set_rules('tahun', 'Tahun Berdiri', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat Perusahaan', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			$this->form_validation->set_rules('notelp', 'No. Telepon', 'required');
			$this->form_validation->set_rules('kategori', 'kategori', 'required');

			if($this->form_validation->run() == false){
    			$data['profil'] = $this->m_ctrlPerusahaan->get_profile($this->username);
					$this->load->view('perusahaan/Edit_profil', $data);
				}
				else{
					$profil_perusahaan = array(
						'nama_perusahaan' => set_value('nama'),
						'tahun_berdiri' => set_value('tahun'),
						'alamat_perusahaan' => set_value('alamat'),
						'deskripsi' => set_value('deskripsi'),
						'kategori' => set_value('kategori'),
						'foto' => set_value('foto'),
						'no_tlp' => set_value('notelp'),
						);
			$this->m_ctrlPerusahaan->edit_profile($username, $profil_perusahaan);
			redirect(base_url('panel_perusahaan/dashboard'));
			}
		}

	public function list_proposal(){
		$data['proposal'] = $this->m_ctrlPerusahaan->get_proposal($this->username);
		$this->load->view('perusahaan/list_proposal', $data);
	}
}
?>
