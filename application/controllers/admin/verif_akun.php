<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verif_akun extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_perusahaan');
	}
	
	public function verif_akun_perusahaan(){

		$data['qry'] = $this->m_perusahaan->get_data("perusahaan");

		$this->load->view('admin/verif_akun_perusahaan', $data);
	}

	public function do_verif_perusahaan(){
		$id_user = $this->input->post('id_user');
		$this->m_perusahaan->do_verif("user",$id_user);

		redirect(base_url('admin/verif_akun/verif_akun_perusahaan'));

	}

	public function lol(){
		redirect(base_url(''));

	}

}
?>