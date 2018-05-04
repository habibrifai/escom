<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_ctrlOrganisasi');
		$this->load->model('m_organisasi');
	}

	public function index(){

		$this->load->view('organisasi/dashboard');
	}
}
?>
