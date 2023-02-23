<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lbeverages extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_vbeverages');        
    }
	public function index()
	{
		$data['data_beverages'] =$this->M_vbeverages->get_all_data()->result_array();
		// $data = array(
		// 	'food' =>$this->M_vfood->get_all_data(),
		// );
        $this->load->view('layout/header');
		//$this->load->view('layout/sidebar');
		$this->load->view('layout/l_beverages/view_lbeverages',$data);
		$this->load->view('layout/footer');
	}
}