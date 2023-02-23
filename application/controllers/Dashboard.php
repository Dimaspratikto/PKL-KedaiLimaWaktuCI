<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		if(!empty($this->session->userdata('llogin'))){
            redirect('llogin');
        }
		
        
        $this->load->model('M_Admin');        
    }
	public function index()
	{	$data = array(
				'total_food' => $this->M_Admin->total_food(),
				'total_beverages' => $this->M_Admin->total_beverages(),
	);
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/isi', $data	);
		$this->load->view('admin/footer');
	}
}
