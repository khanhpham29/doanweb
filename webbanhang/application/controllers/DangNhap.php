<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DangNhap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login/dangnhap_view');
	}	
	public function Auth()
	{
		$email = $this->input->post('email');
		$matkhau = $this->input->post('matkhau');
		$this->load->model('Auth_model');
		$data=$this->Auth_model->dangnhap($email);
		if($data && password_verify($matkhau, $data['matkhau']))
		{
			unset($data['matkhau']);
		
			$this->session->set_userdata( $data );
			redirect('Index','refresh');
		}
		else
		{
			$this->session->set_flashdata('error', 'sai tên đăng nhập hoặc mật khẩu');
			redirect('DangNhap','refresh');
		}
	}
}

/* End of file DangNhap.php */
/* Location: ./application/controllers/DangNhap.php */