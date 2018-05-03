<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_ctrlOrganisasi');
		$this->load->model('m_organisasi');
	}

	public function index(){

		$this->load->view('organisasi/dashboard');
	}

	public function list_spj(){
		$this->load->view('admin/list_spj');
	}

	public function edit_profil(){

			$this->form_validation->set_rules('nama', 'Nama Perusahaan', 'required');
			$this->form_validation->set_rules('tahun', 'Tahun Berdiri', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat Perusahaan', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			$this->form_validation->set_rules('notelp', 'No. Telepon', 'required');
			$this->form_validation->set_rules('kategori', 'kategori', 'required');
			$username = $this->session->userdata('nama');

			if($this->form_validation->run() == false){
    			$data['profil'] = $this->m_ctrlPerusahaan->get_profile($username);
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
}
?>
