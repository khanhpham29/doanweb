<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loaisanpham_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	// Hàm xử lý loại sản phẩm
	public function AddLoaiSanPham($maloai,$tenloai)
	{
		$data = array(
			'maloai'=>$maloai,
			'tenloai'=>$tenloai,
		);
		$this->db->insert('loaisanpham', $data);
		return $this->db->insert_id();
	}
	public function laydulieuloaisp()
	{
		$this->db->select('*');
		$data=$this->db->get('loaisanpham');
		$data= $data->result_array();
		return $data; 
	}
	public function EditLoaiSpById($maloai)
	{
		$this->db->select('*');
		$this->db->where('maloai', $maloai);
		$dulieu= $this->db->get('loaisanpham');
		$dulieu= $dulieu->result_array();
		return $dulieu;
	}
	public 	function UpdateLoaiSpById($maloai,$tenloai)
	{
		$this->db->where('maloai', $maloai);
		$dulieucanupdate= array('tenloai'=>$tenloai);		
		return $this->db->update('loaisanpham', $dulieucanupdate);
	}
	public function DeleteLoaiSpById($maloai)
	{
		$this->db->where('maloai', $maloai);
		return $this->db->delete('loaisanpham');
	}

}

/* End of file sanpham_model.php */
/* Location: ./application/models/sanpham_model.php */