<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sanpham_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getloaisp()
	{
		$this->db->select('*');
		$data=$this->db->get('loaisanpham');
		$data= $data->result_array();
		return $data; 
	}
	public function getHangsp()
	{
		$this->db->select('*');
		$data=$this->db->get('hangsanpham');
		$data= $data->result_array();
		return $data; 
	}
	public function addsp($masp,$tensp,$hinh,$giagoc,$giaban,$mahang,$maloai)
	{
		$data = array(
			'masp'=>$masp,
			'tensp'=>$tensp,
			'hinh'=>$hinh,
			'giagoc'=>$giagoc,
			'giaban'=>$giaban,
			'mahang'=>$mahang,
			'maloai'=>$maloai		
		);
		$this->db->insert('sanpham', $data);
		return $this->db->insert_id();
	}
	public function getsp()
	{
		$this->db->select('*');
		$data=$this->db->get('sanpham');
		$data= $data->result_array();
		return $data;
	}
	public function EditspById($masp)
	{
		$this->db->select('*');		
		$this->db->where('masp', $masp);
		$data=$this->db->get('sanpham');
		$data= $data->result_array();
		return $data;
	}
	public function UpdateSp($masp,$tensp,$giagoc,$giaban)
	{
		$this->db->where('masp', $masp);
		$data = array(
			'tensp'=>$tensp,
			'giagoc'=>$giagoc,
			'giaban'=>$giaban,
			);
		return $this->db->update('sanpham', $data);
	}
	public function DeleteSp($masp)
	{
		$this->db->where('masp', $masp);
		return $this->db->delete('sanpham');
	}
	public function searchSp($search_text)
	{
		$data = $this->db->query("select * from sanpham where tensp like '%".$search_text."%' 
									order by giagoc");
		$data= $data->result_array();
		return $data;
	}
}

/* End of file sanpham_model.php */
/* Location: ./application/models/sanpham_model.php */