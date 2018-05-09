<?php

class M_spj extends CI_Model{

	function get($table){
		$this->db->select("spj.spj, perusahaan.nama_perusahaan, organisasi.nama_organisasi");
		$this->db->from($table);
		$this->db->join('proposal', 'spj.id_proposal = proposal.id_proposal', 'left');
		$this->db->join('perusahaan', 'proposal.id_perusahaan = perusahaan.id_perusahaan', 'left');
		$this->db->join('organisasi', 'proposal.id_organisasi = organisasi.id_organisasi', 'left');

		$hasil = $this->db->get()->result_array();
		return $hasil;
	}
}
?>