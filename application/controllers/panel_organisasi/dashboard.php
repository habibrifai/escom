<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_perusahaan');
		$this->load->model('m_organisasi');
		$this->load->model('m_ctrlOrganisasi');
		$this->load->model('m_proposal');
		$this->username = $this->session->userdata('nama');
	}

	public function index(){
		$data['qry'] = $this->m_perusahaan->get_data("perusahaan");
		$this->load->view('organisasi/dashboard', $data);
	}

	public function proposal_terkirim(){
		$data['proposal'] = $this->m_ctrlOrganisasi->get_proposal($this->username);
		$this->load->view('organisasi/proposal_terkirim',$data);
	}

	public function proposal_disetujui(){
		$data['proposal'] = $this->m_ctrlOrganisasi->get_proposal_disetujui($this->username);
		$this->load->view('organisasi/v_kirim_spj',$data);
	}

	public function lihat_balasan($id){
		$data['balasan'] = $this->m_ctrlOrganisasi->get_balasan_proposal($id, $this->username);
		$this->load->view('organisasi/balasan_proposal',$data);
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
				'proposal' => $proposal,
				'tanggal_pengajuan' => date("d-m-Y"),
				'status_proposal' => 'belum disetujui'
			);

			$this->m_proposal->upload_proposal($data);

			$jml = $this->m_proposal->jumlah($data['id_perusahaan'])->num_rows();

			echo $jml;

			$this->m_perusahaan->update_jml_proposal('perusahaan',$jml,$data['id_perusahaan']);

			$this->load->view('organisasi/proposal_terkirim');

		} else {
			echo "gagal upload";
		}

	}

	public function kirim_spj($id_perusahaan, $id_proposal){

		$nama = $this->m_perusahaan->get_nama($id_perusahaan);

		$data['data'] = array(
			'nama_perusahaan' => $nama[0]['nama_perusahaan'], 
			'id_proposal' => $id_proposal
		);
		
		$this->load->view('organisasi/kirim_spj', $data);
	}

	public function upload_spj(){

		$config = array(
			'upload_path' => 'assets/spj/',
			'allowed_types' => 'pdf|doc|docx',
			'max_size' => 15000 //in kb
		);

		$fileUpload = array();
		$this->upload->initialize($config);

		if($this->upload->do_upload('spj')){
			$fileUpload = $this->upload->data();
			$spj = $fileUpload['file_name'];

			$data = array(
				'id_proposal' => $this->input->post('id_proposal'),
				'spj' => $spj
			);

			$this->m_organisasi->upload_spj($data);

			redirect(base_url('panel_organisasi/dashboard/'));

		} else {
			echo "gagal upload";
		}
	}
}
?>
