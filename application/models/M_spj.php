<?php

class M_spj extends CI_Model{

	function get_id_spj($table){
		$this->db->select("id_proposal, spj");
		$this->db->from($table);
		return $this->db->get()->result();
	}

	function get_data($id_proposal){
		$this->db->select('id_organisasi, id_perusahaan');
		$this->db->from('proposal');
		$this->db->where('id_proposal', $id_proposal);
		$hasil1 = $this->db->get()->row();

		$this->db->select('nama_perusahaan');
		$this->db->from('perusahaan');
		$this->db->where('id_perusahaan', $hasil1->id_perusahaan);
		$perusahaan = $this->db->get()->result_array();

		$this->db->select('nama_organisasi');
		$this->db->from('organisasi');
		$this->db->where('id_organisasi', $hasil1->id_organisasi);
		$organisasi = $this->db->get()->result_array();

		// $result = $organisasi;

		$result = array($perusahaan, $organisasi);

		// var_dump($result);

		return $result;
	}
}
?>