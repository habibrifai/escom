<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_perusahaan');
	}

	public function index(){
		$data['qry'] = $this->m_perusahaan->get_data("perusahaan");
		$this->load->view('organisasi/dashboard', $data);
	}

	public function get($kategori){
		$data['qry'] = $this->m_perusahaan->get_data_kategori("perusahaan",$kategori);
		$this->load->view('organisasi/dashboard', $data);
	}
}
?>
