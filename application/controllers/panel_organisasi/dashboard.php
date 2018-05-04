<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_perusahaan');
		$this->load->model('m_organisasi');
		$this->load->model('m_proposal');
	}

	public function index(){
		$data['qry'] = $this->m_perusahaan->get_data("perusahaan");
		$this->load->view('organisasi/dashboard', $data);
	}

	public function get($kategori){
		$data['qry'] = $this->m_perusahaan->get_data_kategori("perusahaan",$kategori);
		$this->load->view('organisasi/dashboard', $data);
	}

	public function kirim_proposal($id,$username){
		$data['per'] = $this->m_perusahaan->get_data_id("perusahaan",$id);
		$data['org'] = $this->m_organisasi->get_id("organisasi",$username);

		// echo $id;
		// echo $username;

		// var_dump($data);

		$this->load->view('organisasi/kirim_proposal', $data);
	}

	public function do_kirim(){

		$config = array(
			'upload_path' => 'assets/proposal/',
			'allowed_types' => 'pdf|doc|docx',
			'max_size' => 15000 //in kb
		);

		$fileUpload = array();
		$this->upload->initialize($config);

		if($this->upload->do_upload('proposal')){
			$fileUpload = $this->upload->data();
			$proposal = $fileUpload['file_name'];

			$data = array(
				'id_organisasi' => $this->input->post('id_organisasi'),
				'id_perusahaan' => $this->input->post('id_perusahaan'),
				'proposal' => $proposal
			);

			$this->m_proposal->upload_proposal($data);

			$jml = $this->m_proposal->jumlah($data['id_perusahaan'])->num_rows();

			echo $jml;

			$this->m_perusahaan->update_jml_proposal('perusahaan',$jml,$data['id_perusahaan']);

			// $this->load->view('organisasi/proposal_terkirim');

		} else {
			echo "gagal upload";
		}

	}
}
?>
