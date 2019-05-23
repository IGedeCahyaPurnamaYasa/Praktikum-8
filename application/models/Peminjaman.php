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
    public function getPeminjaman(){
        $this->db->select('peminjaman.KdPinjam,Nama,Judul,Tgl_pinjam,Tgl_kembali');
        $this->db->from('peminjaman');
        $this->db->join('anggota','anggota.KdAnggota = peminjaman.KdAnggota');
        $this->db->join('buku','buku.KdRegister = peminjaman.KdRegister');
        $this->db->join('detil_pinjam', 'detil_pinjam.KdPinjam = peminjaman.KdPinjam');
        $query = $this->db->get('');

        return $query->result();
    }


    public function simpanAnggota(){
	    $data = array(
	      "KdAnggota" => '',
	      "Nama" => $this->input->post('nama'),
	      "Prodi" => $this->input->post('prodi'),
	      "Jenjang" => $this->input->post('jenjang'),
	      "Alamat" => $this->input->post('alamat')
	    );
	    $this->db->insert('anggota', $data);

	    // Untuk mengeksekusi perintah insert data
  	}

  	public function simpanPeminjaman(){
  		$id = $this->session->userdata('id');
	    $data = array(
	      "KdPinjam" => '',
	      "KdAnggota" => $this->input->post('anggota'),
	      "KdPetugas" => $id,
	      "KdRegister" => $this->input->post('buku')
	    );
	    $this->db->insert('peminjaman', $data); // Untuk mengeksekusi perintah insert data

	    $data2 = array(
	    	"KdPinjam" => '',
	    	"KdRegister" => $this->input->post('buku'),
	    	"Tgl_pinjam" => $this->input->post('tgl'),
	    	"Tgl_kembali" => ''
	    );

	    $this->db->insert('detil_pinjam', $data2);
  	}

  	public function bukuKembali($kode){
  		$tgl = date('Y-m-d');
  		$this->db->set('Tgl_kembali',$tgl);
  		$this->db->where('KdPinjam', $kode);
  		$this->db->update('detil_pinjam');
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
	      "Alamat" => $this->input->post('alamat'),
	      "username" => $this->input->post('username'),
	      "password" => $this->input->post('password'),
	      "last_login" => $this->input->post('login')
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
	      "Alamat" => $this->input->post('alamat'),
	      "username" => $this->input->post('username'),
	      "password" => $this->input->post('password')
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

  	public function prosesLogin(){
  		// $uname = $this->input->post('username');
  		// $pass = $this->input->post('password');
  		// $this->db->where('username', $uname);
  		// $this->db->where('password', $pass);
  		// return $this->db->get('petugas')->num_rows();
  		$uname = $this->input->post('username');
  		$pass = $this->input->post('password');
  		$this->db->select('KdPetugas,username');
  		$this->db->where('username',$uname);
  		$this->db->where('password',$pass);
  		$res = $this->db->get('petugas')->row();
  		$this->session->set_userdata('uname', $res->username);
  		$this->session->set_userdata('id',$res->KdPetugas);

  	}

  	public function lastLogin(){
  		$tgl = date('Y-m-d');
  		$id = $this->session->userdata('id');
  		$this->db->set('last_login',$tgl);
  		$this->db->where('KdPetugas', $id);
  		$this->db->update('petugas');
  	}

  	public function getData($rowno,$rowperpage) {
 
	    $this->db->select('*');
	    $this->db->from('posts');
	    $this->db->limit($rowperpage, $rowno);  
	    $query = $this->db->get();
	 
	    return $query->result_array();
	 }

  // Select total records
	 public function getrecordCount() {

	    $this->db->select('count(*) as allcount');
	    $this->db->from('posts');
	    $query = $this->db->get();
	    $result = $query->result_array();
	 
	    return $result[0]['allcount'];
	 }
}
?>