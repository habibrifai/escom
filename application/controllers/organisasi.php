<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_perusahaan');
		$this->load->model('m_organisasi');
	}
	
	public function index()
	{
		$data['list_p'] = $this->m_perusahaan->get_data_home("perusahaan");
		$data['list_o'] = $this->m_organisasi->get_data_home("organisasi");
		$data['perusahaan'] = $this->m_perusahaan->get_data_detail("perusahaan");
		$data['organisasi'] = $this->m_organisasi->get_data_detail("organisasi");
		// $data['jml_data_p'] = $this->m_perusahaan->get_data_home_jumlah("perusahaan");
		// $data['jml_data_o'] = $this->m_organisasi->get_data_home_jumlah("organisasi");
		$this->load->view('organisasi', $data);
	}

	public function show_organisasi($id_user){
		$data['list_p'] = $this->m_perusahaan->get_data_home("perusahaan");
		$data['list_o'] = $this->m_organisasi->get_data_home("organisasi");
		$data['perusahaan'] = $this->m_perusahaan->get_data_detail("perusahaan");
		$data['organisasi'] = $this->m_organisasi->get_data_detail("organisasi");

		$data['organisasi'] = $this->m_organisasi->tampil_organisasi('organisasi',$id_user);
		$this->load->view('organisasi', $data);
	}
}
?>