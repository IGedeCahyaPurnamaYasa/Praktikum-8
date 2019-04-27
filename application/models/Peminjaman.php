<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Model{

    public function getBuku(){
        return $this->db->get('buku')->result();
    }

    public function getPegawai(){
        return $this->db->get('petugas')->result();
    }

    public function getAnggota(){
        return $this->db->get('anggota')->result();
    }


    public function simpanAnggota(){
	    $data = array(
	      "KdAnggota" => '',
	      "Nama" => $this->input->post('nama'),
	      "Prodi" => $this->input->post('prodi'),
	      "Jenjang" => $this->input->post('jenjang'),
	      "Alamat" => $this->input->post('alamat')
	    );
	    
	    $this->db->insert('anggota', $data); // Untuk mengeksekusi perintah insert data
  	}

  	public function simpanBuku(){
	    $data = array(
	      "KdRegister" => '',
	      "Judul" => $this->input->post('judul'),
	      "Pengarang" => $this->input->post('pengarang'),
	      "Penerbit" => $this->input->post('penerbit'),
	      "Thn_terbit" => $this->input->post('tahun')
	    );
	    
	    $this->db->insert('buku', $data); // Untuk mengeksekusi perintah insert data
  	}
  	public function simpanPegawai(){
	    $data = array(
	      "KdPetugas" => '',
	      "Nama" => $this->input->post('nama'),
	      "Alamat" => $this->input->post('alamat')
	    );
	    
	    $this->db->insert('petugas', $data); // Untuk mengeksekusi perintah insert data
  	}

  	public function editAnggota($kode){
	    $data = array(
	      "KdAnggota" => $this->input->post('kode'),
	      "Nama" => $this->input->post('nama'),
	      "Prodi" => $this->input->post('prodi'),
	      "Jenjang" => $this->input->post('jenjang'),
	      "Alamat" => $this->input->post('alamat')
	    );
	    
	    $this->db->where('KdAnggota', $kode);
	    $this->db->update('anggota', $data); // Untuk mengeksekusi perintah update data
  	}
  	public function editPegawai($kode){
	    $data = array(
	      "KdPetugas" => $this->input->post('kode'),
	      "Nama" => $this->input->post('nama'),
	      "Alamat" => $this->input->post('alamat')
	    );
	    
	    $this->db->where('KdPetugas', $kode);
	    $this->db->update('petugas', $data); // Untuk mengeksekusi perintah update data
  	}

  	public function editBuku($kode){
	    $data = array(
	      "KdRegister" => $this->input->post('kode'),
	      "Judul" => $this->input->post('judul'),
	      "Pengarang" => $this->input->post('pengarang'),
	      "Penerbit" => $this->input->post('penerbit'),
	      "Thn_terbit" => $this->input->post('tahun')
	    );
	    
	    $this->db->where('KdRegister', $kode);
	    $this->db->update('buku', $data); // Untuk mengeksekusi perintah update data
  	}

  	public function edit($nis){
	    $data = array(
	      "nama" => $this->input->post('input_nama'),
	      "alamat" => $this->input->post('input_alamat')
	    );
	    
	    $this->db->where('no_induk', $nis);
	    $this->db->update('buku', $data); // Untuk mengeksekusi perintah update data
  	}

	public function deleteAnggota($kode){
	    $this->db->where('KdAnggota', $kode);
	    $this->db->delete('anggota'); // Untuk mengeksekusi perintah delete data
  	}
  	public function deleteBuku($kode){
	    $this->db->where('KdRegister', $kode);
	    $this->db->delete('buku'); // Untuk mengeksekusi perintah delete data
  	}
  	public function deletePegawai($kode){
	    $this->db->where('KdPetugas', $kode);
	    $this->db->delete('petugas'); // Untuk mengeksekusi perintah delete data
  	}

    public function view(){
	    return $this->db->get('buku')->result();
	}
	public function viewAnggota_by($kode){
	    $this->db->where('KdAnggota', $kode);
	    return $this->db->get('anggota')->row();
  	}
  	public function viewBuku_by($kode){
	    $this->db->where('KdRegister', $kode);
	    return $this->db->get('buku')->row();
  	}
  	public function viewPegawai_by($kode){
	    $this->db->where('KdPetugas', $kode);
	    return $this->db->get('petugas')->row();
  	}
}
?>