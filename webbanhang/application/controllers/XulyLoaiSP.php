<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class XulyLoaiSP extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{				
		$this->load->model('LoaiSanpham_model');
		$data = $this->LoaiSanpham_model->laydulieuloaisp();
		$data = array('dulieutucontroller'=> $data);
		$this->load->view('loaisanpham/addloaisp_view',$data,false);
	}
	public function Them_loaisanpham()
	{
		$maloai = $this->input->post('maloai');
		$tenloai = $this->input->post('tenloai');
		$this->load->model('LoaiSanpham_model');
		$trangthai= $this->LoaiSanpham_model->Addloaisanpham($maloai,$tenloai);
		if($trangthai)
		{
			$this->load->view('loaisanpham/themloaithanhcong_view');
		}
		else{
			echo " them that bai";
		}
	}
	public function Sua_loaisanpham($maloaiedit)
	{
		$this->load->model('LoaiSanpham_model');
		$data = $this->LoaiSanpham_model->editLoaiSpById($maloaiedit);
		$data = array('editloaisp'=>$data);
		$this->load->view('loaisanpham/sualoaisanpham_view', $data, FALSE);
	}
	public function Capnhat_loaisanpham()
	{
		$maloai = $this->input->post('maloai');
		$tenloai = $this->input->post('tenloai');
		$this->load->model('LoaiSanpham_model');
		$data= $this->LoaiSanpham_model->UpdateLoaiSpById($maloai,$tenloai);
		if($data)
		{
			$this->load->view('loaisanpham/sualoaispthanhcong_view', $data, FALSE);
		}
	}
	public function Xoa_loaisanpham($maloainhanduoc)
	{
		$this->load->model('LoaiSanpham_model');
		$data=$this->LoaiSanpham_model->deleteLoaiSpById($maloainhanduoc);
		if($data)
		{
			$this->load->view('loaisanpham/xoaloaispthanhcong_view', $data, FALSE);
		}
	}
}

/* End of file AddLoaiSP.php */
/* Location: ./application/controllers/AddLoaiSP.php */