<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_perusahaan');
		$this->load->model('m_organisasi');
		$this->load->model('m_ctrlOrganisasi');
		$this->load->model('m_proposal');
		$this->load->model('m_spj');
		$this->username = $this->session->userdata('nama');
	}

	public function index(){
		$status_notif = $this->m_proposal->cek_status_notif($this->username);

		$notif_spj_cleared = $this->m_spj->cek_spj_cleared_organisasi($this->username);

		$notif_spj = 0;

		foreach ($notif_spj_cleared as $k) {
			if(isset($k)){
				if ($k->status_notif_organisasi == "Cleared" || $k->status_notif_organisasi == "Revisi") {
					$notif_spj = 1;
				}
			} else {
				$notif_spj = 0;
			}
		}

		$data['notif_spj'] = $notif_spj;


		$notif_stts = 0;

		foreach ($status_notif as $key) {
			if(isset($key)){
				if($key->status_notif == "Disetujui" || $key->status_notif == "Ditolak"){
					$notif_stts = 1;
				} else {
					$notif_stts = 0;
				}
			} else {
				$notif_stts = 0;
			}
		}

		$data['notif_status'] = $notif_stts;
		$data['qry'] = $this->m_perusahaan->get_data("perusahaan");
		$this->load->view('organisasi/dashboard', $data);
	}

	public function proposal_terkirim(){

		$this->m_proposal->reset_notif_status($this->username, 'status_notif');

		$data['proposal'] = $this->m_ctrlOrganisasi->get_proposal($this->username);
		$this->load->view('organisasi/proposal_terkirim',$data);
	}

	public function proposal_disetujui(){
		$data['proposal'] = $this->m_ctrlOrganisasi->get_proposal_disetujui($this->username);

		$this->m_spj->reset_status_notif_organisasi($this->username);

		$this->load->view('organisasi/v_kirim_spj',$data);
	}

	public function lihat_balasan($id){
		$data['balasan'] = $this->m_ctrlOrganisasi->get_balasan_proposal($id, $this->username);
		$this->load->view('organisasi/balasan_proposal',$data);
	}

	public function get($kategori){
		$status_notif = $this->m_proposal->cek_status_notif($this->username);
		$data['notif_status'] = $status_notif;
		$notif_spj = 0;

		$notif_spj_cleared = $this->m_spj->cek_spj_cleared_organisasi($this->username);

		foreach ($notif_spj_cleared as $k) {
			if(isset($k)){
				if ($k->status_notif_organisasi == "Cleared" || $k->status_notif_organisasi == "Revisi") {
					$notif_spj = 1;
				}
			} else {
				$notif_spj = 0;
			}
		}

		$data['notif_spj'] = $notif_spj;
		$data['qry'] = $this->m_perusahaan->get_data_kategori("perusahaan",$kategori);
		$this->load->view('organisasi/dashboard', $data);
	}

	public function kirim_proposal($id,$username){
		$data['per'] = $this->m_perusahaan->get_data_id("perusahaan",$id);
		$data['org'] = $this->m_organisasi->get_id("organisasi",$username);

		$this->load->view('organisasi/kirim_proposal', $data);
	}

	public function do_kirim(){

		$config = array(
			'upload_path' => 'assets/proposal/',
			'allowed_types' => 'pdf|doc|docx',
			'max_size' => 15000 //in kb
		);

		$fileUpload = array();
		$this->upload->initialize($config);

		if($this->upload->do_upload('proposal')){
			$fileUpload = $this->upload->data();
			$proposal = $fileUpload['file_name'];

			$data = array(
				'id_organisasi' => $this->input->post('id_organisasi'),
				'id_perusahaan' => $this->input->post('id_perusahaan'),
				'proposal' => $proposal,
				'tanggal_pengajuan' => date("d-m-Y"),
				'status_proposal' => 'belum disetujui'
			);

			$this->m_proposal->upload_proposal($data);

			$jml = $this->m_proposal->jumlah($data['id_perusahaan'])->num_rows();

			// echo $jml;

			$this->m_perusahaan->update_jml_proposal('perusahaan',$jml,$data['id_perusahaan']);

			redirect(base_url('panel_organisasi/dashboard/proposal_terkirim'));

		} else {
			echo "gagal upload";
		}

	}

	public function kirim_spj($id_perusahaan, $id_proposal){

		$nama = $this->m_perusahaan->get_nama($id_perusahaan);

		$data['data'] = array(
			'nama_perusahaan' => $nama[0]['nama_perusahaan'], 
			'id_proposal' => $id_proposal
		);
		
		$this->load->view('organisasi/kirim_spj', $data);
	}

	public function upload_spj(){

		$config = array(
			'upload_path' => 'assets/spj/',
			'allowed_types' => 'pdf|doc|docx',
			'max_size' => 15000 //in kb
		);

		$fileUpload = array();
		$this->upload->initialize($config);

		if($this->upload->do_upload('spj')){
			$fileUpload = $this->upload->data();
			$spj = $fileUpload['file_name'];

			$data = array(
				'id_proposal' => $this->input->post('id_proposal'),
				'status_spj' => 'idle',
				'spj' => $spj
			);

			$this->m_organisasi->upload_spj($data);

			redirect(base_url('panel_organisasi/dashboard/'));

		} else {
			echo "gagal upload";
		}
	}

	public function kirim_revisi_spj($id_spj,$id_proposal,$id_perusahaan){
		$nama = $this->m_perusahaan->get_nama($id_perusahaan);

		$data['data'] = array(
			'nama_perusahaan' => $nama[0]['nama_perusahaan'], 
			'id_proposal' => $id_proposal,
			'id_spj' => $id_spj
		);
		
		$this->load->view('organisasi/kirim_revisi_spj', $data);
	}

	public function upload_revisi_spj(){

		$config = array(
			'upload_path' => 'assets/spj/',
			'allowed_types' => 'pdf|doc|docx',
			'max_size' => 15000 //in kb
		);

		$id_spj = $this->input->post('id_spj');
		$fileUpload = array();
		$this->upload->initialize($config);

		if($this->upload->do_upload('spj')){
			$fileUpload = $this->upload->data();
			$spj = $fileUpload['file_name'];

			$data = array(
				'status_spj' => 'idle',
				'status_notif' => '-',
				'spj' => $spj
			);

			$this->m_organisasi->upload_revisi_spj($id_spj,$data);

			redirect(base_url('panel_organisasi/dashboard/'));

		} else {
			echo "gagal upload";
		}
	}

	public function edit_profil(){
		$data['profil'] = $this->m_ctrlOrganisasi->get_profil($this->username);
		$this->load->view('organisasi/edit_profil', $data);

	}

	public function do_update_profil(){
		$id = $this->input->post('id');
		$data = array(
			'nama_organisasi' => $this->input->post('nama'),
			'tahun_berdiri' => $this->input->post('tahun'),
			'alamat_organisasi' => $this->input->post('alamat'),
			'deskripsi' => $this->input->post('deskripsi'),
			'no_tlp' => $this->input->post('notelp')
		);

		$this->m_ctrlOrganisasi->update_profil($id, $data);
		redirect(base_url('panel_organisasi/dashboard/edit_profil'));
	}
}
?>
