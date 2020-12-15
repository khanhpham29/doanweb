<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
		    'datasp' => $this->getsp()		   
		];
		$this->load->view('index_view', $data, false);
	}
	private function getsp()
	{
		$this->load->model('Sanpham_model');
		$data = $this->Sanpham_model->getsp();
		return $data;
	}
	public function show_sp($maspShow)
	{
		$this->load->model('Sanpham_model');
		$datasp = $this->Sanpham_model->EditspById($maspShow);
		$datasp = array('showsanpham'=> $datasp);
		$this->load->view('sanpham/sanpham_view', $datasp, FALSE);
	}

	public function show_ttkh($maspShow)
	{		
		$this->load->model('Sanpham_model');
		$datasp = $this->Sanpham_model->EditspById($maspShow);
		$data = array(
			'showsanpham'=> $datasp
			);
		$this->load->view('sanpham/form_view', $data, FALSE);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */