<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function dangky($email,$matkhau,$hoten,$sdt)
	{
		$khachhang = array(
			'email'=> $email,
			'matkhau'=> $matkhau,
			'hoten'=> $hoten,
			'sdt'=> $sdt,
			);
		$this->db->insert('khachhang',$khachhang);
		return $this->db->insert_id();
	}
	public function diachikh($id_makh,$tinh_thanh,$quan_huyen,$diachi)
	{
		$diachi = array(
			'id_makh'=>$id_makh,
			'tinh_thanh'=>$tinh_thanh,
			'quan_huyen'=>$quan_huyen,
			'diachigh' =>$diachi
			);
		$this->db->insert('diachikhachhang', $diachi);
		return $this->db->insert_id();		
	}
	public function dangnhap($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('khachhang')->row_array();
	}

}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */