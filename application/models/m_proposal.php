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

}
