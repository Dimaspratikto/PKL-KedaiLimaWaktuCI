<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class llogin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        //$this->load->model('M_login');
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_login');
       
        
    }
    public function index()
	{
     	$this->load->view('layout/l_login/view_llogin');
	}
    public function aksi_login(){
        $user = $this->input->post('username');
		$pass = md5($this->input->post('password'));

        $dataPenunjuk = array(
            'user' => $user,
            'pass' => $pass,
        );

    }
    public function login_aksi(){
		$user = $this->input->post('username',true);
		$pass = md5($this->input->post('password',true));
        //rule validasi
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() != FALSE)
        {
            $where = array(
                'username' => $user,
                'password' => $pass
                );
            $ceklogin = $this->M_login->cek_login($where)->num_rows();
            if ($ceklogin >0){
                $sess_data = array(
                'username' => $user,
                'status' => "OK"
                );
                $this->session->set_userdata($sess_data);
                redirect(base_url("index.php/Dashboard"));
            }else{
                redirect(base_url("index.php/llogin"));
            }
        }else {
            $this->load->view('layout/l_login/view_llogin');
            //redirect(base_url("index.php/Dashboard"));
        }

	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php'));
        
	}
  
}