<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DangXuat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->session->sess_destroy();
		redirect('index','refresh');
	}

}

/* End of file DangXuat.php */
/* Location: ./application/controllers/DangXuat.php */