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
	}

	public function index(){

		$data['org'] = $this->m_organisasi->jumlah_data("user");
		$data['per'] = $this->m_perusahaan->jumlah_data("user");

		$this->load->view('admin/dashboard', $data);
	}

	public function list_spj(){

		$data['doc'] = $this->m_spj->get('spj');
		

		$this->load->view('admin/list_spj', $data);
	}

	public function list_proposal(){
		$data['profil'] = $this->m_organisasi->get_data_detail('organisasi');
		$this->load->view('admin/list_proposal',$data);
	}

	public function list_proposal_organisasi($id){
		$data['profil'] = $this->m_ctrlOrganisasi->get_profile_byID($id);
		$data['proposal'] = $this->m_proposal->get_organisasi_proposal($id);
		$this->load->view('admin/list_proposal_organisasi', $data);
	}

	public function lihat_balasan($id_proposal){
		$data['balasan'] = $this->m_proposal->get_balasan_proposal($id_proposal);
		$this->load->view('admin/balasan_proposal_organisasi',$data);
	}

}
?>
