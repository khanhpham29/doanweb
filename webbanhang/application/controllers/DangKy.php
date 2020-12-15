<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DangKy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login/dangky_view');
	}
	public function Auth()
	{
		// model khach hang
		$email = $this->input->post('email');
		$matkhau=  $this->input->post('matkhau');
		$matkhau = password_hash($matkhau, PASSWORD_DEFAULT);
		$hoten = $this->input->post('hoten');
		$sdt= $this->input->post('sdt');
		// model dia chi
		$tinh_thanh = $this->input->post('tinh_thanh');
		$quan_huyen = $this->input->post('quan_huyen');
		$diachi = $this->input->post('diachi'); 
		//load model
		$this->load->model('Auth_model');
		$id_makh = $this->Auth_model->dangky($email,$matkhau,$hoten,$sdt);	
		if($id_makh)
		{
			$diachikh = $this->Auth_model->diachikh($id_makh,$tinh_thanh,$quan_huyen,$diachi);
			if($diachikh)
			{
				redirect('DangNhap','refresh');
			}			
		}
		else
		{
			echo " that bai";
		}
	}
}

/* End of file DangKy.php */
/* Location: ./application/controllers/DangKy.php */