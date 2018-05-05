<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_ctrlPerusahaan');
		$this->load->model('m_perusahaan');
		$this->load->model('m_organisasi');
		$this->username = $this->session->userdata('nama');
	}

	public function index(){

		$jumlah = $this->m_perusahaan->get_jumlah($this->username);

		// var_dump($jumlah);

		$awal = $jumlah[0]['jml_proposal_awal'];
		$ahir = $jumlah[0]['jml_proposal_ahir'];
		// $id_per = $jumlah[0]['id_perusahaan'];

		if ($awal < $ahir) {
			$data['notif'] = $ahir - $awal;
			$this->load->view('perusahaan/dashboard', $data);
		} else {
			$this->load->view('perusahaan/dashboard');
		}

		// $this->m_perusahaan->reset_jml($id_per);
	}

	public function list_spj(){
		$data['spj'] = $this->m_ctrlPerusahaan->get_spj($this->username);
		$data['cek'] = $this->m_ctrlPerusahaan->count_spj($this->username);
		$this->load->view('perusahaan/list_spj', $data);
	}

	public function list_proposal(){
		$data['proposal'] = $this->m_ctrlPerusahaan->get_proposal($this->username);
		$data['cek'] = $this->m_ctrlPerusahaan->count_proposal($this->username);
		$this->load->view('perusahaan/list_proposal', $data);
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
			$this->m_ctrlPerusahaan->edit_profile($this->username, $profil_perusahaan);
			redirect(base_url('panel_perusahaan/dashboard/edit_profil'));
			}
		}

	public function balas_proposal($id){
		$this->form_validation->set_rules('balasan', 'Balasan Proposal', 'required');

		if($this->form_validation->run() == false){
				$data['propos'] = $this->m_ctrlPerusahaan->get_detail_proposal($id);
				$this->load->view('perusahaan/Balas_proposal', $data);
			}
			else{
				$balasan = array(
					'isi_balasan' => set_value('balasan'),
					'status_proposal' => 'Disetujui'
					);
		$this->m_ctrlPerusahaan->balas_proposaldb($id, $balasan);
		redirect(base_url('panel_perusahaan/dashboard/'));
		}
	}

	public function tolak_proposal($id){
		$tolak = array(
			'status_proposal' => 'Ditolak'
			);
		$this->m_ctrlPerusahaan->tolak_proposaldb($id, $tolak);
		redirect(base_url('panel_perusahaan/dashboard/'));
	}
}
?>
