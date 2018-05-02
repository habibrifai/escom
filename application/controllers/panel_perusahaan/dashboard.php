<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_perusahaan');
		$this->load->model('m_organisasi');
	}

	public function index(){

		$this->load->view('perusahaan/dashboard');
	}

	public function list_spj(){
		$this->load->view('admin/list_spj');
	}

  public function edit_profil(){
    $this->load->view('perusahaan/Edit_profil');
  }

}
?>
