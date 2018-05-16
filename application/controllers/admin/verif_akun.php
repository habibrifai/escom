<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verif_akun extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_perusahaan');
		$this->load->model('m_organisasi');
	}
	
	public function verif_akun_perusahaan(){

		$data['qry'] = $this->m_perusahaan->get_data("perusahaan");

		$this->load->view('admin/verif_akun_perusahaan', $data);
	}

	public function detail_akun_perusahaan($id){

		$data['qry'] = $this->m_perusahaan->detail("perusahaan",$id);

		$this->load->view('admin/detail_akun_perusahaan', $data);
	}

	public function do_verif_perusahaan(){
		$id_user = $this->input->post('id_user');
		$this->m_perusahaan->do_verif("user",$id_user);

		redirect(base_url('admin/verif_akun/verif_akun_perusahaan'));

	}

	public function verif_akun_organisasi(){

		$data['qry'] = $this->m_organisasi->get_data("organisasi");

		$this->load->view('admin/verif_akun_organisasi', $data);
	}

	public function detail_akun_organisasi($id){

		$data['qry'] = $this->m_organisasi->detail("organisasi",$id);

		$this->load->view('admin/detail_akun_organisasi', $data);
	}

	public function do_verif_organisasi(){
		$id_user = $this->input->post('id_user');
		$this->m_organisasi->do_verif("user",$id_user);

		redirect(base_url('admin/verif_akun/verif_akun_organisasi'));

	}

	public function hapus_organisasi(){
		$id_user = $this->input->post('id_user');
		$this->m_organisasi->hapus("organisasi",$id_user);
		$this->m_organisasi->hapus("user",$id_user);

		redirect(base_url('admin/verif_akun/verif_akun_organisasi'));

	}

	public function hapus_perusahaan(){
		$id_user = $this->input->post('id_user');
		$this->m_perusahaan->hapus("perusahaan",$id_user);
		$this->m_perusahaan->hapus("user",$id_user);

		redirect(base_url('admin/verif_akun/verif_akun_perusahaan'));

	}

}
?>