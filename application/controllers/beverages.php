<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beverages extends CI_Controller {
    function __construct()
    {
        parent::__construct();
      
        if(!empty($this->session->userdata('llogin'))){
            redirect('llogin');
        }
        $this->load->model('M_beverages');
        $this->load->helper(array('form', 'url'));
        
    }
    public function getminuman(){
        $data= $this->M_beverages->t_beverages();
        return $data->result_array();
    }
	public function index()
	{
        $data['data_beverages'] =  $this->M_beverages->t_beverages()->result_array();
        // var_dump($data);
        // die;
        $this->load->view ('admin/header');
        $this->load->view('admin/sidebar'); 
		$this->load->view('admin/beverages/view_beverages', $data);
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
                    $foto_beverages=$this->upload->data();
                    $foto_beverages=$foto_beverages['file_name'];
                    $nama_beverages = $this->input->post('nama_beverages',TRUE);
                    $tipe_beverages = $this->input->post('tipe_beverages',TRUE);
                    $harga_beverages= $this->input->post('harga_beverages',TRUE);
                    $data = array (
                        
                        'nama_beverages'       =>    $nama_beverages,
                        'tipe_beverages'       =>    $tipe_beverages,
                        'harga_beverages'      =>    $harga_beverages,
                        'foto_beverages'       =>    $foto_beverages
                );
                $this->M_beverages->insert($data);
                redirect('beverages');
                }
    }
    public function edit($id=null)
    {   
        $id=$this->input->post('id_beverages');
        $config['upload_path']  =   './asset/foto';
        $config['allowed_types']=   'jpg|jpeg|png|gif';
        $config['max_size']     = 3000;
        $config['max_width']    = 3000; 
        $config['max_height']   = 3000; 
        $this->load->library('upload',$config);
        if ( !$this->upload->do_upload('userfile'))
        {
            $nama_beverages = $this->input->post('nama_beverages',TRUE);
            $tipe_beverages = $this->input->post('tipe_beverages',TRUE);
            $harga_beverages= $this->input->post('harga_beverages',TRUE);
            $data = array (
                
                'nama_beverages'       =>    $nama_beverages,
                'tipe_beverages'       =>    $tipe_beverages,
                'harga_beverages'      =>    $harga_beverages,
    
            );
            $this->db->where('id_beverages',$id);
            $this->db->update('beverages',$data);
            redirect('beverages');
          
        }else
        {
            $foto_beverages=$this->upload->data();
            $foto_beverages=$foto_beverages['file_name'];
            $nama_beverages = $this->input->post('nama_beverages',TRUE);
            $tipe_beverages = $this->input->post('tipe_beverages',TRUE);
            $harga_beverages= $this->input->post('harga_beverages',TRUE);
            $data = array (
                
                'nama_beverages'       =>    $nama_beverages,
                'tipe_beverages'       =>    $tipe_beverages,
                'harga_beverages'      =>    $harga_beverages,
                'foto_beverages'       =>    $foto_beverages
             );
            $this->db->where('id_beverages',$id);
            $this->db->update('beverages',$data);
            redirect('beverages');
        }  
    }
    public function hapus_data($id)
    {
        
        $this->M_beverages->hapus_data($id);
        redirect('beverages');
    }
}
