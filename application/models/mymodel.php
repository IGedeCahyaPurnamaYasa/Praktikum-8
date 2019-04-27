<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model{

    public function GetMahasiswa(){
        $this->db->select()->from("mahasiswa");
        $query= $this->db->get();   
        return $query->result_array();

        // $data = $this->db->query("SELECT * FROM mahasiswa");
        // return $data->result_array();
    }

    public function save(){
	    $data = array(
	      "no_induk" => $this->input->post('input_nis'),
	      "nama" => $this->input->post('input_nama'),
	      "alamat" => $this->input->post('input_alamat')
	    );
	    
	    $this->db->insert('mahasiswa', $data); // Untuk mengeksekusi perintah insert data
  	}

  	public function edit($nis){
	    $data = array(
	      "nama" => $this->input->post('input_nama'),
	      "alamat" => $this->input->post('input_alamat')
	    );
	    
	    $this->db->where('no_induk', $nis);
	    $this->db->update('mahasiswa', $data); // Untuk mengeksekusi perintah update data
  	}

	public function delete($nis){
	    $this->db->where('no_induk', $nis);
	    $this->db->delete('mahasiswa'); // Untuk mengeksekusi perintah delete data
  	}
    public function view(){
	    return $this->db->get('mahasiswa')->result();
	}
	public function view_by($nis){
	    $this->db->where('no_induk', $nis);
	    return $this->db->get('mahasiswa')->row();
  	}
}
?>