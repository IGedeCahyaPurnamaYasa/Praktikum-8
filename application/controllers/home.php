<?php 

/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['user'] = $this->home_model->load_data()->result_array();
		$this->load->view('home_view',$data);
	}

	// public function insert()
	// {
	// 	$data = array(
	// 		'nama' => $this->input->post('nama');
	// 		'nim' => $this->input->post('nim');
	// 	);
	// }
}

 ?>