<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_perusahaan');
		$this->load->model('m_organisasi');
	}
	
	public function index(){

		$data['org'] = $this->m_organisasi->jumlah_data("user");
		$data['per'] = $this->m_perusahaan->jumlah_data("user");

		$this->load->view('admin/dashboard', $data);
	}

	public function list_spj(){
		$this->load->view('admin/list_spj');
	}

}
?>