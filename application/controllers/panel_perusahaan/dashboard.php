<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_ctrlPerusahaan');
		$this->load->model('m_perusahaan');
		$this->load->model('m_organisasi');
		$this->load->model('m_spj');
		$this->username = $this->session->userdata('nama');
		$jumlah = $this->m_perusahaan->get_jumlah($this->username);
		$awal = $jumlah[0]['jml_proposal_awal'];
		$ahir = $jumlah[0]['jml_proposal_ahir'];
		$this->notif = $ahir-$awal;
	}

	public function index(){
		$data['notif'] = $this->notif;

		$notif_spj_cleared = $this->m_spj->cek_spj_cleared($this->username);

		$notif_spj = 0;

		foreach ($notif_spj_cleared as $key) {
			if(isset($key)){
				if ($key->status_notif == "Cleared" || $key->status_notif == "Revisi") {
					$notif_spj = 1;
				}
			} else {
				$notif_spj = 0;
			}
		}

		$data['notif_spj'] = $notif_spj;
		$data['jml_disetujui'] = $this->m_perusahaan->jml_proposal_disetujui($this->username);
		$data['jml_diterima'] = $this->m_perusahaan->jml_proposal_diterima($this->username);
		$data['jml_spj'] = $this->m_perusahaan->jml_spj($this->username);
		$this->load->view('perusahaan/dashboard', $data);
	}

	public function list_spj(){
		$data['notif'] = $this->notif;
		$data['spj'] = $this->m_ctrlPerusahaan->get_spj($this->username);
		$data['cek'] = $this->m_ctrlPerusahaan->count_spj($this->username);
		$this->m_spj->reset_status_notif($this->username);
		$this->load->view('perusahaan/list_spj', $data);
	}

	public function list_proposal(){
		$data['proposal'] = $this->m_ctrlPerusahaan->get_proposal($this->username);
		$data['cek'] = $this->m_ctrlPerusahaan->count_proposal($this->username);
		$this->m_ctrlPerusahaan->reset_notif_proposal($this->username);
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
			$data['notif'] = $this->notif;
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
				'no_tlp' => set_value('notelp'),
			);
			$this->m_ctrlPerusahaan->edit_profile($this->username, $profil_perusahaan);
			redirect(base_url('panel_perusahaan/dashboard/edit_profil'));
		}
	}

	public function balas_proposal($id){
			$data['notif'] = $this->notif;
			$data['propos'] = $this->m_ctrlPerusahaan->get_detail_proposal($id);
			$this->load->view('perusahaan/Balas_proposal', $data);
	}

	public function do_balas($id){
		$config = array(
			'upload_path' => 'assets/balasan/',
			'allowed_types' => 'pdf|doc|docx',
			'max_size' => 15000 //in kb
			);

		$fileUpload = array();
		$this->upload->initialize($config);
		$id_organisasi = $this->input->post('id_organisasi');

		if($this->upload->do_upload('balasan')){
				$fileUpload = $this->upload->data();
				$isi_balasan = $fileUpload['file_name'];
				$balasan = array(
					'isi_balasan' => $isi_balasan,
					'status_proposal' => 'Disetujui',
					'status_notif' => 'Disetujui',
					'status_notif_admin' => 'Disetujui'
				);
				$status_proposal_organisasi = array('status_notif_admin' => 'Disetujui');
				$this->m_organisasi->set_status_notif_admin($id_organisasi, $status_proposal_organisasi);
				$this->m_ctrlPerusahaan->balas_proposaldb($id, $balasan);
				redirect(base_url('panel_perusahaan/dashboard/'));
			}
		else echo 'gagal';
	}

	public function tolak_proposal($id){
		$tolak = array(
			'status_proposal' => 'Ditolak',
			'status_notif' => 'Ditolak',
			'status_notif_admin' => 'Ditolak'
		);
		$this->m_ctrlPerusahaan->tolak_proposaldb($id, $tolak);
		redirect(base_url('panel_perusahaan/dashboard/'));
	}
}
?>
