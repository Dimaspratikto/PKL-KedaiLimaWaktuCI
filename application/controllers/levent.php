<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class levent extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_vevent');        
    }
	public function index()
	{
		$data['data_event'] =$this->M_vevent->get_all_data()->result_array();
		// $data = array(
		// 	'food' =>$this->M_vfood->get_all_data(),
		// );
        $this->load->view('layout/header');
		//$this->load->view('layout/sidebar');
		$this->load->view('layout/l_event/view_levent',$data);
		$this->load->view('layout/footer');
	}
}