<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

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
		$this->load->view('perusahaan', $data);
	}

	public function show_perusahaan($id_user){
		$data['list_p'] = $this->m_perusahaan->get_data_home("perusahaan");
		$data['list_o'] = $this->m_organisasi->get_data_home("organisasi");
		$data['perusahaan'] = $this->m_perusahaan->get_data_detail("perusahaan");
		$data['organisasi'] = $this->m_organisasi->get_data_detail("organisasi");

		$data['perusahaan'] = $this->m_perusahaan->tampil_perusahaan('perusahaan',$id_user);
		$this->load->view('perusahaan', $data);
	}
}
?>