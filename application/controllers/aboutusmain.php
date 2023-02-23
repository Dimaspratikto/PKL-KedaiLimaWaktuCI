<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutusmain extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        
        if(!empty($this->session->userdata('llogin'))){
            redirect('llogin');
        }
        $this->load->model('M_aboutusmain');
        $this->load->helper(array('form', 'url'));
        $this->load->library('image_lib');
        
    }

	public function index()
	{
        $data['data_aboutusmain'] =  $this->M_aboutusmain->t_aboutusmain()->result_array();
        // var_dump($data);
        // die;
        $this->load->view ('admin/header');
        $this->load->view('admin/sidebar'); 
		$this->load->view('admin/aboutus/view_aboutusmain', $data);
		$this->load->view('admin/footer');
	}

    public function edit($id=null)
    {   
        $id=$this->input->post('id_aboutusmain');
        $config['upload_path']  =   './asset/foto';
        $config['allowed_types']=   'jpg|jpeg|png|gif';
        $config['max_size']     = 3000;
        $config['max_width']    = 3000; 
        $config['max_height']   = 3000; 
        $this->load->library('upload',$config);
        if ( !$this->upload->do_upload('userfile'))
        {
            $ket_aboutusmain = $this->input->post('ket_aboutusmain',TRUE);
            $data = array (
                'ket_aboutusmain'       =>    $ket_aboutusmain,
            );
            $this->db->where('id_aboutusmain',$id);
            $this->db->update('aboutusmain',$data);
            redirect('aboutusmain');
          
        }else
        {
            $foto_aboutusmain=$this->upload->data();
            $foto_aboutusmain=$foto_aboutusmain['file_name'];
            $ket_aboutusmain = $this->input->post('ket_aboutusmain',TRUE);
            $data = array (
                'ket_aboutusmain'       =>    $ket_aboutusmain,
                'foto_aboutusmain'       =>    $foto_aboutusmain
             );
            $this->db->where('id_aboutusmain',$id);
            $this->db->update('aboutusmain',$data);
            redirect('aboutusmain');
        }  
    }

}
