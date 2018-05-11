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
		// $jumlah = $this->m_organisasi->get_data_detail('organisasi');

		// $awal = $jumlah[0]['jml_proposal_awal'];
		// $ahir = $jumlah[0]['jumlah_proposal'];
		// $this->notif = $ahir-$awal;
	}

	public function index(){
		// $status_notif = $this->m_proposal->cek_status_notif_admin();

		// if(isset($status_notif)){
		// 	if($status_notif->status_notif_admin == "Disetujui" || $status_notif->status_notif_admin == "Ditolak"){
		// 		$notif_stts = 1;
		// 	} else {
		// 		$notif_stts = 0;
		// 	}
		// } else {
		// 	$notif_stts = 0;
		// }

		

		$data['notif_status'] = $this->m_organisasi->get_data_detail('organisasi');

		// echo $this->notif;

		$data['jml'] = $this->m_spj->jumlah_data('idle');
		$data['spj'] = $this->m_spj->jumlah_data('Cleared');
		$data['org'] = $this->m_organisasi->jumlah_data("user");
		$data['per'] = $this->m_perusahaan->jumlah_data("user");
		
		$this->load->view('admin/dashboard', $data);
	}

	public function list_spj(){
		$data['doc'] = $this->m_spj->get('spj');

		$this->load->view('admin/list_spj', $data);
	}

	public function list_proposal(){
		// $this->m_proposal->reset_notif_status($this->username, 'status_notif_admin');

		$data['profil'] = $this->m_organisasi->get_data_detail('organisasi');
		$this->load->view('admin/list_proposal',$data);
	}

	public function list_proposal_organisasi($id){
		$this->m_organisasi->reset_jml_proposal($id,'organisasi');
		$this->m_proposal->reset_status_notif_admin($id, 'proposal');
		$data['profil'] = $this->m_ctrlOrganisasi->get_profile_byID($id);
		$data['proposal'] = $this->m_proposal->get_organisasi_proposal($id);
		$this->load->view('admin/list_proposal_organisasi', $data);
	}

	public function lihat_balasan($id_proposal){
		$data['balasan'] = $this->m_proposal->get_balasan_proposal($id_proposal);
		$this->load->view('admin/balasan_proposal_organisasi',$data);
	}

	public function update_status($id_spj,$status){
		$data = array(
			'status_spj' => $status, 
			'status_notif' => $status,
			'status_notif_organisasi' => $status
		);
		$this->m_spj->update_status($id_spj, $data);

		redirect(base_url('admin/dashboard/list_spj'));
	}

}
?>
