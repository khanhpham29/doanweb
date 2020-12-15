<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Khachhang_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getkh()
	{
		$this->db->select('*');
		$data = $this->db->get('khachhang');
		$data = $data->result();
		return $data;
	}
	
}

/* End of file khachhang_model.php */
/* Location: ./application/models/khachhang_model.php */