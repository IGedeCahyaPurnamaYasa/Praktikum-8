<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller
{   
	public function __construct(){
	    parent::__construct();
	    $this->load->model('mymodel'); // Load SiswaModel ke controller ini
  	}

  	public function index(){
	    $data['siswa'] = $this->mymodel->view();
	    $this->load->view('hello', $data);
  	}

  	public function tambah(){
	    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	      // if($this->mymodel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
	        $this->mymodel->save(); // Panggil fungsi save() yang ada di SiswaModel.php
	        redirect('');
	      // }
	    }
	    $this->load->view('tambah');
  	}

  	public function ubah($nis){
	    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	      // if($this->mymodel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
	        $this->mymodel->edit($nis); // Panggil fungsi edit() yang ada di SiswaModel.php
	        redirect('');
	    }
	    $data['siswa'] = $this->mymodel->view_by($nis);
	    $this->load->view('ubah', $data);
    }

     public function hapus($nis){
	    $this->mymodel->delete($nis); // Panggil fungsi delete() yang ada di SiswaModel.php
	    redirect('');
  	}



    // public function index(){
    // 	$this->load->model('mymodel');
    // 	$data['result'] = $this->mymodel->GetMahasiswa();
    //     $this->load->view('hello',$data);
    // }
    public function fungsi(){
        echo "Function fungsi dari Controller Helloworld";
    }

    public function parameters($nama){
        echo "Selamat datang ".$nama;
    }
}

 ?>