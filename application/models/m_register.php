<?php

class m_register extends CI_Model{

	function registration($datauser, $dataclient){
		$this->db->insert('user', $datauser);
		$this->db->select('id_user');
		$this->db->from('user');
		$this->db->where('username', $datauser['username']);
		$id_user = $this->db->get();

			//buat register ke tabel perusahaan
			if($datauser['role']=='organisasi'){
				$this->db->set('id_user', $id_user->result_array())
								 ->insert('organisasi',$dataclient);
				// $query = "INSERT INTO organisasi (id_organisasi, id_user, nama_organisasi) VALUES (NULL, (Select id_user FROM user WHERE username = ". "'" .$datauser['username']. "'" . "), 'anjay')";
				// $this->db->query($query);
			}
			else if($datauser['role']=='perusahaan'){
				$this->db->set('id_user', $id_user)
								 ->insert('perusahaan',$dataclient);
				// $query = "INSERT INTO perusahaan (id_perusahaan, id_user, nama_perusahaan) VALUES (NULL, (Select id_user FROM user WHERE username = ". "'" .$datauser['username']. "'" . "), 'anjay')";
				// $this->db->query($query);
			}
		}

	function cek_regist($data){
		$condition = "username =" . "'" . $data['username'] . "' OR " . "email =" . "'" .$data['email']."'";
		$this->db->select('username, email');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows()==0)
			return true;
		else return false;
	}
}
