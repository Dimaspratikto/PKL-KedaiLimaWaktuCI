<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laboutus extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_vaboutus');   
		$this->load->model('M_aboutusmain');      
    }
	public function index()
	{
		$data['data_aboutus'] =$this->M_vaboutus->get_all_data()->result_array();
		$data['data_aboutusmain'] =  $this->M_aboutusmain->t_aboutusmain()->result_array();
		// $data = array(
		// 	'food' =>$this->M_vfood->get_all_data(),
		// );
        $this->load->view('layout/header');
		//$this->load->view('layout/sidebar');
		$this->load->view('layout/l_aboutus/view_laboutus',$data);
		$this->load->view('layout/footer');
	}
}