<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event extends CI_Controller {
    function __construct()
    {
        parent::__construct();
       
        if(!empty($this->session->userdata('llogin'))){
            redirect('llogin');
        }
        $this->load->model('M_event');
        $this->load->helper(array('form', 'url'));
        
    }
    public function getmakanan(){
        $data= $this->M_event->t_event();
        return $data->result_array();
    }
	public function index()
	{
        $data['data_event'] =  $this->M_event->t_event()->result_array();
        // var_dump($data);
        // die;
        $this->load->view ('admin/header');
        $this->load->view('admin/sidebar'); 
		$this->load->view('admin/event/view_event', $data);
		$this->load->view('admin/footer');
	}
    public function insert()
    {   
                $config['upload_path']  =   './asset/foto';
                $config['allowed_types']=   'jpg|jpeg|png|gif';
                $config['max_size']     = 3000;
                $config['max_width']    = 3000; 
                $config['max_height']   = 3000; 
                $this->load->library('upload',$config);
                if ( !$this->upload->do_upload('userfile'))
                {
                    echo"Upload Gagal";
                }else
                {
                    $foto_event=$this->upload->data();
                    $foto_event=$foto_event['file_name'];
                    $nama_event = $this->input->post('nama_event',TRUE);
                    $keterangan_event = $this->input->post('keterangan_event',TRUE);
                    $tanggal_event= $this->input->post('tanggal_event',TRUE);
                    $data = array (
                        
                        'nama_event'       =>    $nama_event,
                        'keterangan_event'       =>    $keterangan_event,
                        'tanggal_event'      =>    $tanggal_event,
                        'foto_event'       =>    $foto_event
                );
                $this->M_event->insert($data);
                redirect('event');
                }
    }
    public function edit($id=null)
    {   
        $id=$this->input->post('id_event');
        $config['upload_path']  =   './asset/foto';
        $config['allowed_types']=   'jpg|jpeg|png|gif';
        $config['max_size']     = 3000;
        $config['max_width']    = 3000; 
        $config['max_height']   = 3000; 
        $this->load->library('upload',$config);
        if ( !$this->upload->do_upload('userfile'))
        {
            $nama_event = $this->input->post('nama_event',TRUE);
            $keterangan_event = $this->input->post('keterangan_event',TRUE);
            $tanggal_event= $this->input->post('tanggal_event',TRUE);
            $data = array (
                
                'nama_event'       =>    $nama_event,
                'keterangan_event'       =>    $keterangan_event,
                'tanggal_event'      =>    $tanggal_event,
    
            );
            $this->db->where('id_event',$id);
            $this->db->update('event',$data);
            redirect('event');
          
        }else
        {
            $foto_event=$this->upload->data();
            $foto_event=$foto_event['file_name'];
            $nama_event = $this->input->post('nama_event',TRUE);
            $keterangan_event = $this->input->post('keterangan_event',TRUE);
            $tanggal_event= $this->input->post('tanggal_event',TRUE);
            $data = array (
                
                'nama_event'       =>    $nama_event,
                'keterangan_event'       =>    $keterangan_event,
                'tanggal_event'      =>    $tanggal_event,
                'foto_event'       =>    $foto_event
             );
            $this->db->where('id_event',$id);
            $this->db->update('event',$data);
            redirect('event');
        }  
    }
    public function hapus_data($id)
    {
        
        $this->M_event->hapus_data($id);
        redirect('event');
    }
}
