<?php 

	/**
	 * 
	 */
	class Home_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function add($data)
		{
			$this->db->insert('user',$data);
			return $this->db->affected_rows();
		}

		public function load_data()
		{
			return $this->db->get('user');
		}
	}

 ?>