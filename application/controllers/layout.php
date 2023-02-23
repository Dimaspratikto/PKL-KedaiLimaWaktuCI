<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layout extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_aboutusmain');
        $this->load->helper(array('form', 'url'));
        
    }
	public function index()
	{
		$data['data_aboutusmain'] =  $this->M_aboutusmain->t_aboutusmain()->result_array();
        $this->load->view('layout/header');
		//$this->load->view('layout/sidebar');
		$this->load->view('layout/isi',$data);
		$this->load->view('layout/footer');
	}
}
