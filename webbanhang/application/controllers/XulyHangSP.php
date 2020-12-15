<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class XuLyHangSP extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('HangSanpham_model');
		$data = $this->HangSanpham_model->laydulieuhangsp();
		$data = array('dulieutucontroller'=> $data);
		$this->load->view('hangsanpham/addhangsp_view', $data, FALSE);
	}
	public function Them_hangsanpham()
	{
		$mahang = $this->input->post('mahang');
		$tenhang = $this->input->post('tenhang');
		$this->load->model('HangSanpham_model');
		if($this->HangSanpham_model->Themhangsanpham($mahang,$tenhang))
		{
			$this->load->view('hangsanpham/themhangthanhcong_view');
		}

	}
	public function Sua_hangsanpham($mahangedit)
	{
		$this->load->model('HangSanpham_model');
		$data = $this->HangSanpham_model->editHangSpById($mahangedit);
		$data = array('edithangsp'=>$data);
		$this->load->view('hangsanpham/suahangsanpham_view', $data, FALSE);
	}
	public function Capnhat_hangsanpham()
	{
		$mahang = $this->input->post('mahang');
		$tenhang = $this->input->post('tenhang');
		$this->load->model('HangSanpham_model');
		$data= $this->HangSanpham_model->UpdateHangSpById($mahang,$tenhang);
		if($data)
		{
			$this->load->view('hangsanpham/suahangspthanhcong_view', $data, FALSE);
		}
	}
	public function Xoa_hangsanpham($mahangnhanduoc)
	{
		$this->load->model('HangSanpham_model');
		$data=$this->HangSanpham_model->deletehangSpById($mahangnhanduoc);
		if($data)
		{
			$this->load->view('hangsanpham/xoahangspthanhcong_view', $data, FALSE);
		}
	}
}

/* End of file AddHangSP.php */
/* Location: ./application/controllers/AddHangSP.php */