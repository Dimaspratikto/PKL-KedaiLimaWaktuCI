<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class slide extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        
        if(!empty($this->session->userdata('llogin'))){
            redirect('llogin');
        }
        $this->load->model('M_slide');
        $this->load->helper(array('form', 'url'));
        
    }
    public function getslide(){
        $data= $this->M_slide->t_slide();
        return $data->result_array();
    }
	public function index()
	{
        $data['data_slide'] =  $this->M_slide->t_slide()->result_array();
        // var_dump($data);
        // die;
        $this->load->view ('admin/header');
        $this->load->view('admin/sidebar'); 
		$this->load->view('admin/slide/view_slide', $data);
		$this->load->view('admin/footer');
	}
    public function insert()
    {   
                $config['upload_path']  =   './asset/foto';
                $config['allowed_types']=   'jpg|jpeg|png|gif';
                $config['max_size']     = 5000;
                $config['max_width']    = 6000; 
                $config['max_height']   = 6000; 
                $this->load->library('upload',$config);
                if ( !$this->upload->do_upload('userfile'))
                {
                    echo"Upload Gagal";
                }else
                {
                    $foto_slide=$this->upload->data();
                    $foto_slide=$foto_slide['file_name'];
                    $judul_slide = $this->input->post('judul_slide',TRUE);
                    $keterangan_slide = $this->input->post('keterangan_slide',TRUE);
              
                    $data = array (
                        
                        'judul_slide'       =>   $judul_slide,
                        'keterangan_slide'  =>   $keterangan_slide,
                        'foto_slide'        =>   $foto_slide
                        
                );
                $this->M_slide->insert($data);
                redirect('slide');
                }
    }
    public function edit($id=null)
    {   
        $id=$this->input->post('id_slide');
        $config['upload_path']  =   './asset/foto';
        $config['allowed_types']=   'jpg|jpeg|png|gif';
        $config['max_size']     = 3000;
        $config['max_width']    = 3000; 
        $config['max_height']   = 3000; 
        $this->load->library('upload',$config);
        if ( !$this->upload->do_upload('userfile'))
        {
            $judul_slide = $this->input->post('judul_slide',TRUE);
            $keterangan_slide = $this->input->post('keterangan_slide',TRUE);
            $data = array (
                'judul_slide'       =>    $judul_slide,
                'keterangan_slide'       =>    $keterangan_slide,
            );
            $this->db->where('id_slide',$id);
            $this->db->update('slide',$data);
            redirect('slide');
        }else
        {
            $foto_slide=$this->upload->data();
            $foto_slide=$foto_slide['file_name'];
            $judul_slide = $this->input->post('judul_slide',TRUE);
            $keterangan_slide = $this->input->post('keterangan_slide',TRUE);
            $data = array (      
                'judul_slide'       =>    $judul_slide,
                'keterangan_slide'  =>    $keterangan_slide,
                'foto_slide'        =>    $foto_slide
             );
            $this->db->where('id_slide',$id);
            $this->db->update('slide',$data);
            redirect('slide');
        }  
    }
    public function hapus_data($id)
    {
        
        $this->M_slide->hapus_data($id);
        redirect('slide');
    }
}
