<?php

class m_register extends CI_Model{

	function registration($datauser, $dataclient){
		$this->db->insert('user', $datauser);

			//buat register ke tabel perusahaan
			if($datauser['role']=='organisasi'){
				$query = "INSERT INTO organisasi (id_organisasi, id_user, nama_organisasi, tahun_berdiri, alamat_organisasi, deskripsi, no_tlp, foto)
									VALUES (NULL, (Select id_user FROM user WHERE username = ". "'" .$datauser['username']. "'" . "), '"
									.$dataclient['nama_organisasi']. "', '"
									.$dataclient['tahun_berdiri']. "', '"
									.$dataclient['alamat_organisasi']. "', '"
									.$dataclient['no_tlp']. "', '"
									.$dataclient['foto']. "')";
				$this->db->query($query);
			}
			else if($datauser['role']=='perusahaan'){
				$query = "INSERT INTO perusahaan (id_perusahaan, id_user, nama_perusahaan, tahun_berdiri, alamat_perusahaan, deskripsi, no_tlp, foto)
									VALUES (NULL, (Select id_user FROM user WHERE username = ". "'" .$datauser['username']. "'" . "), '"
									.$dataclient['nama_perusahaan']. "', '"
									.$dataclient['tahun_berdiri']. "', '"
									.$dataclient['alamat_perusahaan']. "', '"
									.$dataclient['no_tlp']. "', '"
									.$dataclient['foto']. "')";
				$this->db->query($query);
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
