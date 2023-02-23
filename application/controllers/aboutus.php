<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutus extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        
        if(!empty($this->session->userdata('llogin'))){
            redirect('llogin');
        }
        $this->load->model('M_aboutus');
        $this->load->helper(array('form', 'url'));
        $this->load->library('image_lib');
        
    }
    public function getmakanan(){
        $data= $this->M_aboutus->t_aboutus();
        return $data->result_array();
    }
	public function index()
	{
        $data['data_aboutus'] =  $this->M_aboutus->t_aboutus()->result_array();
        // var_dump($data);
        // die;
        $this->load->view ('admin/header');
        $this->load->view('admin/sidebar'); 
		$this->load->view('admin/aboutus/view_aboutus', $data);
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
                    $this->load->library('image_lib');
                    $foto_aboutus=$this->upload->data();
                    
                    $configg['image_library'] = 'gd2'; //library yang kita gunakan
                    $configg['source_image'] = './asset/foto/dump/'. $foto_aboutus['file_name'];
                    $configg['maintain_ratio'] = TRUE;
                    $configg['create_thumb'] = TRUE;
                    $configg['width'] = 300;
                    $configg['height'] = 250;
                    $configg['new_image'] = './asset/foto/dump/'. $foto_aboutus['file_name'];
                    $this->image_lib->clear();
                    $this->image_lib->initialize($configg);
                    $this->image_lib->resize();
                     
                    
                    $foto_aboutus=$foto_aboutus['file_name'];
                    $judul_aboutus = $this->input->post('judul_aboutus',TRUE);
                    $keterangan_aboutus = $this->input->post('keterangan_aboutus',TRUE);
                    $tahun_aboutus= $this->input->post('tahun_aboutus',TRUE);
                    $data = array (
                        
                        'judul_aboutus'       =>    $judul_aboutus,
                        'keterangan_aboutus'       =>    $keterangan_aboutus,
                        'tahun_aboutus'      =>    $tahun_aboutus,
                        'foto_aboutus'       =>    $foto_aboutus
                );
            
                $this->M_aboutus->insert($data);
                redirect('aboutus');
                }
    }
    public function edit($id=null)
    {   
        $id=$this->input->post('id_aboutus');
        $config['upload_path']  =   './asset/foto';
        $config['allowed_types']=   'jpg|jpeg|png|gif';
        $config['max_size']     = 3000;
        $config['max_width']    = 3000; 
        $config['max_height']   = 3000; 
        $this->load->library('upload',$config);
        if ( !$this->upload->do_upload('userfile'))
        {
            $judul_aboutus = $this->input->post('judul_aboutus',TRUE);
            $keterangan_aboutus = $this->input->post('keterangan_aboutus',TRUE);
            $tahun_aboutus= $this->input->post('tahun_aboutus',TRUE);
            $data = array (
                
                'judul_aboutus'       =>    $judul_aboutus,
                'keterangan_aboutus'       =>    $keterangan_aboutus,
                'tahun_aboutus'      =>    $tahun_aboutus,
    
            );
            $this->db->where('id_aboutus',$id);
            $this->db->update('aboutus',$data);
            redirect('aboutus');
          
        }else
        {
            $foto_aboutus=$this->upload->data();
            $foto_aboutus=$foto_aboutus['file_name'];
            $judul_aboutus = $this->input->post('judul_aboutus',TRUE);
            $keterangan_aboutus = $this->input->post('keterangan_aboutus',TRUE);
            $tahun_aboutus= $this->input->post('tahun_aboutus',TRUE);
            $data = array (
                
                'judul_aboutus'       =>    $judul_aboutus,
                'keterangan_aboutus'       =>    $keterangan_aboutus,
                'tahun_aboutus'      =>    $tahun_aboutus,
                'foto_aboutus'       =>    $foto_aboutus
             );
            $this->db->where('id_aboutus',$id);
            $this->db->update('aboutus',$data);
            redirect('aboutus');
        }  
    }
    public function hapus_data($id)
    {
        
        $this->M_aboutus->hapus_data($id);
        redirect('aboutus');
    }
}
