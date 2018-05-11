<?php

class M_proposal extends CI_Model{

	function upload_proposal($data){
		$this->db->insert('proposal', $data);
		$this->db->select('jumlah_proposal')
		->from('organisasi')
		->where('id_organisasi',$data['id_organisasi']);
		$hasil = $this->db->get()->row();
		$jumlah = $hasil->jumlah_proposal+1;
		$ins = array( 'jumlah_proposal'=> $jumlah);
		$this->db->where('id_organisasi',$data['id_organisasi'])
		->update('organisasi', $ins);
	}

	function jumlah($where){
		$this->db->from('proposal');
		$this->db->where('id_perusahaan', $where);
		return $this->db->get();
	}

	function get_organisasi_proposal($id){
		$this->db->select('id_proposal, id_organisasi, nama_perusahaan, proposal, isi_balasan, status_proposal');
		$this->db->from('proposal');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan = proposal.id_perusahaan');
		$this->db->where('id_organisasi', $id);
						 // ->where('status_proposal', 'belum disetujui');
		$proposal = $this->db->get();
		return $proposal->result();
	}

	function get_balasan_proposal($id_proposal){
		$this->db->select('id_proposal, id_organisasi, nama_perusahaan, proposal, isi_balasan');
		$this->db->from('proposal');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan = proposal.id_perusahaan');
		$this->db->where('id_proposal', $id_proposal);
						 // ->where('status_proposal', 'belum disetujui');
		$balasan = $this->db->get();
		return $balasan->row();
	}

	function cek_status_notif($username){
		$this->db->select('proposal.status_notif, proposal.status_notif_admin');
		$this->db->from('user');
		$this->db->join('organisasi', 'organisasi.id_user = user.id_user');
		$this->db->join('proposal', 'organisasi.id_organisasi = proposal.id_organisasi');
		$this->db->where('username', $username);
		return $this->db->get()->row();
	}

	// function cek_status_notif_admin(){
	// 	$this->db->select('proposal.status_notif_admin, proposal.id_organisasi');
	// 	$this->db->from('proposal');
	// 	$this->db->join('organisasi', 'organisasi.id_organisasi = proposal.id_organisasi', 'left');
	// 	return $this->db->get()->row();
	// }

	function reset_notif_status($username,$kolom){

		$this->db->select('proposal.id_proposal');
		$this->db->from('user');
		$this->db->join('organisasi', 'organisasi.id_user = user.id_user');
		$this->db->join('proposal', 'proposal.id_organisasi = organisasi.id_organisasi');
		$this->db->where('user.username', $username);
		$h = $this->db->get()->row();

		// return $h;

		if (isset($h)) {
			$data = array($kolom => '-');
			$this->db->where('id_proposal', $h->id_proposal);
			$this->db->update('proposal', $data);
		}
	}

	function reset_status_notif_admin($id,$table){

		$data = array('status_notif_admin' => '-');

		$this->db->where('id_organisasi', $id);
		$this->db->update($table, $data);
	}

}
