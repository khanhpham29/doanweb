<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hangsanpham_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function ThemHangSanPham($mahang,$tenhang)
	{
		$data = array(
			'mahang'=>$mahang,
			'tenhang'=>$tenhang,
		);
		return $this->db->insert('hangsanpham', $data);
	}
	public function laydulieuhangsp()
	{
		$this->db->select('*');
		$data=$this->db->get('hangsanpham');
		$data= $data->result_array();
		return $data; 
	}
	public function EditHangSpById($mahang)
	{
		$this->db->select('*');
		$this->db->where('mahang', $mahang);
		$dulieu= $this->db->get('hangsanpham');
		$dulieu= $dulieu->result_array();
		return $dulieu;
	}
	public 	function UpdateHangSpById($mahang,$tenhang)
	{
		$this->db->where('mahang', $mahang);
		$dulieucanupdate= array('tenhang'=>$tenhang);		
		return $this->db->update('hangsanpham', $dulieucanupdate);
	}
	public function DeleteHangSpById($mahang)
	{
		$this->db->where('mahang', $mahang);
		return $this->db->delete('hangsanpham');
	}
}

/* End of file hangsanpham_model.php */
/* Location: ./application/models/hangsanpham_model.php */